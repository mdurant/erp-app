<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            // Example user 1
            [
                'name' => 'DEMO 1 - IntegralTech',
                'email' => 'demo1@integraltech.cl',
                'email_verified_at' => now(),
                'password' => bcrypt('demo1234'), // Use bcrypt for password hashing
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Example user 2
            [
                'name' => 'DEMO 2 - IntegralTech',
                'email' => 'demo2@integraltech.cl',
                'email_verified_at' => now(),
                'password' => bcrypt('demo1234'), // Use bcrypt for password hashing
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        \DB::table('users')->insert($users);
        $this->command->info('Users table seeded!');
    }
}
