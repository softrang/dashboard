<?php

namespace softrang\Dashboard\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categories')->insert([
            // Parent Categories
            ['name' => 'Electronics', 'parent_id' => null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Fashion', 'parent_id' => null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Home & Kitchen', 'parent_id' => null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Books', 'parent_id' => null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sports', 'parent_id' => null, 'created_at' => now(), 'updated_at' => now()],

            // Child Categories
            ['name' => 'Mobile Phones', 'parent_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Men Clothing', 'parent_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kitchen Appliances', 'parent_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Novels', 'parent_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Fitness Equipment', 'parent_id' => 5, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
