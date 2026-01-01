<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class FixUserPasswords extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:fix-passwords {--email=} {--password=} {--check}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fix invalid password hashes in users table. Use --check to verify, or --email and --password to reset.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        if ($this->option('check')) {
            return $this->checkPasswords();
        }

        $email = $this->option('email');
        $password = $this->option('password');

        if (!$email || !$password) {
            $this->error('Please provide both --email and --password options, or use --check to verify all passwords.');
            $this->line('');
            $this->line('Usage examples:');
            $this->line('  php artisan user:fix-passwords --check');
            $this->line('  php artisan user:fix-passwords --email=user@example.com --password=newpassword');
            return Command::FAILURE;
        }

        return $this->resetPassword($email, $password);
    }

    /**
     * Check all user passwords for validity
     */
    private function checkPasswords(): int
    {
        $this->info('Checking all user passwords...');
        $this->line('');

        // Use DB facade to bypass model casting
        $users = DB::table('users')->get(['id', 'email', 'password']);

        if ($users->isEmpty()) {
            $this->warn('No users found in database.');
            return Command::SUCCESS;
        }

        $invalidCount = 0;
        $validCount = 0;

        foreach ($users as $user) {
            if ($this->isValidBcryptHash($user->password)) {
                $this->line("  ✓ {$user->email} - Valid bcrypt hash");
                $validCount++;
            } else {
                $this->error("  ✗ {$user->email} - INVALID hash (length: " . strlen($user->password) . " chars)");
                $invalidCount++;
            }
        }

        $this->line('');
        $this->info("Summary: {$validCount} valid, {$invalidCount} invalid");
        
        if ($invalidCount > 0) {
            $this->line('');
            $this->warn('To fix invalid passwords, run:');
            $this->line('  php artisan user:fix-passwords --email=user@example.com --password=newpassword');
        }

        return $invalidCount > 0 ? Command::FAILURE : Command::SUCCESS;
    }

    /**
     * Reset password for a specific user
     */
    private function resetPassword(string $email, string $password): int
    {
        // Use DB facade to bypass model casting
        $user = DB::table('users')->where('email', $email)->first();

        if (!$user) {
            $this->error("User with email '{$email}' not found.");
            return Command::FAILURE;
        }

        $hashedPassword = Hash::make($password);

        // Update directly in database to bypass model casting
        DB::table('users')
            ->where('id', $user->id)
            ->update(['password' => $hashedPassword]);

        $this->info("✓ Password reset successfully for {$email}");

        // Verify the new password
        if ($this->isValidBcryptHash($hashedPassword)) {
            $this->line("  ✓ New password hash is valid");
        } else {
            $this->error("  ✗ Warning: New password hash appears invalid!");
        }

        return Command::SUCCESS;
    }

    /**
     * Check if a string is a valid bcrypt hash
     */
    private function isValidBcryptHash(?string $hash): bool
    {
        if (empty($hash)) {
            return false;
        }

        // Bcrypt hashes start with $2y$ or $2a$ or $2b$ and are 60 characters long
        // Format: $2y$XX$... (XX is cost factor, followed by 22 char salt + 31 char hash)
        if (strlen($hash) !== 60) {
            return false;
        }

        if (!preg_match('/^\$2[ayb]\$[0-9]{2}\$[A-Za-z0-9\.\/]{53}$/', $hash)) {
            return false;
        }

        // Additional check: verify it can be used with password_verify
        // We'll use a dummy password to check the format
        try {
            // Just check if it's a valid bcrypt format by attempting to verify
            // We use a known invalid password, but the hash format should still be valid
            password_verify('dummy', $hash);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
}
