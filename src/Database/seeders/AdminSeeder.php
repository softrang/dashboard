<?php

namespace softrang\EcommerceDashboard\Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class AdminSeeder extends Seeder
{
    public function run()
    {
        user::updateOrCreate([
            'name' => 'softrang-ecommerce-dashboard',
            'email' => 'info@softrang.com',
            'email_verified_at' => now(),
            'password' =>  Hash::make('1'),
            'remember_token' => Str::random(10),
        ]);
    }
}
