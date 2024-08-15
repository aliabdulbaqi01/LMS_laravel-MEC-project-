<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // admin
        DB::table('users')->create([

            // admin
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
            ],
                // user
                [
                    'name' => 'User',
                    'username' => 'user',
                    'email' => 'user@gmail.com',
                    'password' => Hash::make('password'),
                    'role' => 'user'
                ],
                // instructor
                [
                    'name' => 'Instructor',
                    'username' => 'instructor',
                    'email' => 'instructor@gmail.com',
                    'password' => Hash::make('password'),
                    'role' => 'instructor'
                ]
            ]
        );
    }
}
