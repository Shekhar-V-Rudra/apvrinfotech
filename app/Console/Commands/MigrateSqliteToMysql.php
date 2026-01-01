<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class MigrateSqliteToMysql extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:migrate-sqlite-to-mysql {--sqlite-file=database-1.sqlite} {--force}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Migrate data from SQLite database to MySQL database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $sqliteFileName = $this->option('sqlite-file');
        $sqlitePath = database_path($sqliteFileName);

        if (!file_exists($sqlitePath)) {
            $this->error("SQLite database file not found at: {$sqlitePath}");
            return Command::FAILURE;
        }

        // Check if SQLite database exists and is accessible
        try {
            $sqliteDb = new \PDO("sqlite:{$sqlitePath}");
            $sqliteDb->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $this->info("✓ Connected to SQLite database: {$sqliteFileName}");
        } catch (\Exception $e) {
            $this->error("Cannot connect to SQLite database: " . $e->getMessage());
            return Command::FAILURE;
        }

        // Check MySQL connection
        try {
            DB::connection('mysql')->getPdo();
            $this->info("✓ Connected to MySQL database");
        } catch (\Exception $e) {
            $this->error("Cannot connect to MySQL database. Please check your .env configuration.");
            $this->error("Error: " . $e->getMessage());
            return Command::FAILURE;
        }

        // Tables to migrate (exclude system tables)
        $tablesToMigrate = [
            'users',
            'contacts',
            'portfolios',
            'careers',
        ];

        $this->info("\nStarting data migration from SQLite to MySQL...\n");

        foreach ($tablesToMigrate as $table) {
            $this->migrateTable($sqliteDb, $table);
        }

        $this->info("\n✓ Data migration completed!");
        return Command::SUCCESS;
    }

    /**
     * Migrate a single table from SQLite to MySQL
     */
    private function migrateTable(\PDO $sqliteDb, string $tableName): void
    {
        try {
            // Check if table exists in SQLite
            $stmt = $sqliteDb->query("SELECT name FROM sqlite_master WHERE type='table' AND name='{$tableName}'");
            if ($stmt->rowCount() === 0) {
                $this->warn("  ⚠ Table '{$tableName}' does not exist in SQLite database. Skipping...");
                return;
            }

            // Get all data from SQLite
            $stmt = $sqliteDb->query("SELECT * FROM {$tableName}");
            $rows = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            if (empty($rows)) {
                $this->line("  ⊘ Table '{$tableName}' is empty. Skipping...");
                return;
            }

            // Check if MySQL table exists
            if (!Schema::connection('mysql')->hasTable($tableName)) {
                $this->warn("  ⚠ Table '{$tableName}' does not exist in MySQL. Please run migrations first: php artisan migrate");
                return;
            }

            // Check if MySQL table already has data
            $existingCount = DB::connection('mysql')->table($tableName)->count();
            if ($existingCount > 0 && !$this->option('force')) {
                $this->warn("  ⚠ Table '{$tableName}' already has {$existingCount} rows in MySQL. Use --force to overwrite or migrate anyway.");
                return;
            }

            // Clear existing data if force option is used
            if ($existingCount > 0 && $this->option('force')) {
                DB::connection('mysql')->table($tableName)->truncate();
                $this->line("  ⊘ Cleared existing data from '{$tableName}'");
            }

            // Get column names
            $columns = array_keys($rows[0]);

            // Insert data into MySQL
            $inserted = 0;
            DB::connection('mysql')->beginTransaction();

            try {
                foreach ($rows as $row) {
                    // Convert empty strings to null for nullable fields
                    $data = [];
                    foreach ($row as $key => $value) {
                        // Preserve password hashes as-is (they're already hashed)
                        if ($key === 'password' && $value !== null && $value !== '') {
                            $data[$key] = $value;
                        } else {
                            $data[$key] = ($value === '' || $value === null) ? null : $value;
                        }
                    }

                    // Handle timestamps - SQLite stores as string, MySQL expects datetime
                    if (isset($data['created_at']) && $data['created_at']) {
                        $data['created_at'] = $this->convertTimestamp($data['created_at']);
                    }
                    if (isset($data['updated_at']) && $data['updated_at']) {
                        $data['updated_at'] = $this->convertTimestamp($data['updated_at']);
                    }
                    if (isset($data['email_verified_at']) && $data['email_verified_at']) {
                        $data['email_verified_at'] = $this->convertTimestamp($data['email_verified_at']);
                    }

                    // Use insert with raw password to bypass model casting
                    DB::connection('mysql')->table($tableName)->insert($data);
                    $inserted++;
                }

                DB::connection('mysql')->commit();
                $this->info("  ✓ Migrated {$inserted} rows from '{$tableName}' to MySQL");
            } catch (\Exception $e) {
                DB::connection('mysql')->rollBack();
                $this->error("  ✗ Error migrating '{$tableName}': " . $e->getMessage());
            }

        } catch (\Exception $e) {
            $this->error("  ✗ Error processing table '{$tableName}': " . $e->getMessage());
        }
    }

    /**
     * Convert SQLite timestamp to MySQL datetime format
     */
    private function convertTimestamp($timestamp): ?string
    {
        if (empty($timestamp)) {
            return null;
        }

        // SQLite timestamps can be in various formats
        // Try to convert to MySQL datetime format
        try {
            $date = new \DateTime($timestamp);
            return $date->format('Y-m-d H:i:s');
        } catch (\Exception $e) {
            return $timestamp; // Return as-is if conversion fails
        }
    }
}
