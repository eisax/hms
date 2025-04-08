<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class InitializeDatabase extends Command
{
    protected $signature = 'db:init';
    protected $description = 'Initialize the database by creating it, migrating, and seeding';

    public function handle()
    {
        $dbName = env('DB_DATABASE');
        $dbUser = env('DB_USERNAME');
        $this->info("Creating database '$dbName'...");

        try {
            DB::statement("CREATE DATABASE IF NOT EXISTS `$dbName`");
            $this->info("Database '$dbName' created successfully.");
        } catch (\Exception $e) {
            $this->error("Failed to create database: " . $e->getMessage());
            return 1;
        }

        $this->call('migrate');
        $this->call('db:seed');

        $this->info('Database initialized successfully!');
        return 0;
    }
}
