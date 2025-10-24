<?php

namespace softrang\Dashboard\Console;

use Illuminate\Console\Command;
use softrang\Dashboard\Database\Seeders\AdminSeeder;
use softrang\Dashboard\Database\Seeders\CategorySeeder;

class SeedDashboardCommand extends Command
{
    protected $signature = 'dashboard:seed';
    protected $description = 'Seed default dashboard data (admin user, roles, etc.)';

    public function handle()
    {
        $this->call('db:seed', [
        '--class' => AdminSeeder::class,
    ]);

    $this->call('db:seed', [
        '--class' => CategorySeeder::class,
    ]);

        $this->info('Dashboard seeded successfully!');
    }
}
