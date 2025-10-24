<?php

namespace softrang\EcommerceDashboard\Console;

use Illuminate\Console\Command;
use softrang\EcommerceDashboard\Database\Seeders\AdminSeeder;
use softrang\EcommerceDashboard\Database\Seeders\CategorySeeder;

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
