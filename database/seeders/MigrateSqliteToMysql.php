<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class MigrateSqliteToMysql extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * This seeder migrates data from SQLite to MySQL database.
     * Make sure to configure MySQL connection in .env file before running.
     */
    public function run(): void
    {
        // SQLite connection config
        $sqlitePath = database_path('database-1.sqlite');
        
        if (!file_exists($sqlitePath)) {
            $this->command->warn("SQLite database file not found at: {$sqlitePath}");
            return;
        }

        // Check if SQLite database exists and is accessible
        try {
            $sqliteDb = new \PDO("sqlite:{$sqlitePath}");
            $sqliteDb->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\Exception $e) {
            $this->command->error("Cannot connect to SQLite database: " . $e->getMessage());
            return;
        }

        // Check MySQL connection
        try {
            DB::connection('mysql')->getPdo();
            $this->command->info("MySQL connection successful.");
        } catch (\Exception $e) {
            $this->command->error("Cannot connect to MySQL database. Please check your .env configuration.");
            return;
        }

        // Tables to migrate (exclude system tables)
        $tablesToMigrate = [
            'users',
            'contacts',
            'portfolios',
            'careers',
            // Add other tables as needed
        ];

        foreach ($tablesToMigrate as $table) {
            $this->migrateTable($sqliteDb, $table);
        }

        $this->command->info("Data migration completed!");
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
                $this->command->warn("Table '{$tableName}' does not exist in SQLite database. Skipping...");
                return;
            }

            // Get all data from SQLite
            $stmt = $sqliteDb->query("SELECT * FROM {$tableName}");
            $rows = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            if (empty($rows)) {
                $this->command->info("Table '{$tableName}' is empty. Skipping...");
                return;
            }

            // Check if MySQL table exists
            if (!Schema::connection('mysql')->hasTable($tableName)) {
                $this->command->warn("Table '{$tableName}' does not exist in MySQL. Please run migrations first.");
                return;
            }

            // Check if MySQL table already has data
            $existingCount = DB::connection('mysql')->table($tableName)->count();
            if ($existingCount > 0) {
                $this->command->warn("Table '{$tableName}' already has {$existingCount} rows in MySQL. Skipping to avoid duplicates...");
                return;
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
                        $data[$key] = ($value === '' || $value === null) ? null : $value;
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

                    DB::connection('mysql')->table($tableName)->insert($data);
                    $inserted++;
                }

                DB::connection('mysql')->commit();
                $this->command->info("Migrated {$inserted} rows from '{$tableName}' to MySQL.");
            } catch (\Exception $e) {
                DB::connection('mysql')->rollBack();
                $this->command->error("Error migrating '{$tableName}': " . $e->getMessage());
            }

        } catch (\Exception $e) {
            $this->command->error("Error processing table '{$tableName}': " . $e->getMessage());
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
