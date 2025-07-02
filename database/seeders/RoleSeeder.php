<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'name' => 'Admin',
                'description' => 'Administrator with full access',
            ],
            [
                'name' => 'Editor',
                'description' => 'Content editor with limited access',
            ],
            [
                'name' => 'User',
                'description' => 'Regular user with basic access',
            ],
        ];
        \DB::table('roles')->insert($roles);
        $this->command->info('Roles table seeded!');
    }
}
