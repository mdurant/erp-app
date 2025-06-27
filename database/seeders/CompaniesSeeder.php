<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $companies = [
            [
                'name' => 'IntegralTech Consulting Spa',
                'email' => 'demo@integralconsulting.cl',
                'phone' => '+56912345678',
                'address' => 'Av. Libertador Bernardo O\'Higgins 1234, Santiago',
                'logo' => 'logo_integraltech.png',
                'website' => 'https://www.integraltech.cl',
                'rut' => '76.123.456-7',
                'country' => 'CL',
                'currency' => 'CLP',
                'language' => 'es',
                'timezone' => 'America/Santiago',
                'commune_id' => 1,
                'city_id' => 1,
                'business_activity_id' => 1,
                'is_active' => true,
                'legal_representation' => 'Juan Pérez Pérez',
                'email_legal_representation' => 'juan@integraltech.cl',
                'email_dte' => 'dte@integraltech.cl',
                'is_demo' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        \DB::table('companies')->insert(
            $companies,
            ['rut'], // Unique key
            [
                'name', 'email', 'phone', 'address', 'logo', 'website', 'country', 'currency',
                'language', 'timezone', 'commune_id', 'city_id', 'business_activity_id',
                'is_active', 'legal_representation', 'email_legal_representation', 'email_dte',
                'is_demo', 'created_at', 'updated_at'
            ]
        );
        $this->command->info('Companies table seeded!');
    }
}
