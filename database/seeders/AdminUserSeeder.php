<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            'first_name'    => 'Admin',
            'last_name'     => 'Admin',
            'email'         => 'admin@example.com',
            'password'      => Hash::make('admin123'),
            'user_type'     => 'admin',
            'phone'         => '0000000000',
            'country_code'  => '1',
            'created_at'    => now(),
            'updated_at'    => now(),
        ]);
    }
}
