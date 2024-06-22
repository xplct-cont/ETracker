<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DemoUserSeeder extends Seeder
{
    public function run(): void
    {
        // create demo user
        User::create([
            'name' => 'ET Administrator',
            'user_name' => 'et_administrator',
            'email' => 'et@administrator.com',
            'password' => Hash::make('et_admin123!!'),
        ]);
    }
}
