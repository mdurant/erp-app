<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BanksAccountTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bankAccountTypes = [
            ['name' => 'Cuenta Corriente'],
            ['name' => 'Cuenta Vista/RUT'],
            ['name' => 'Cuenta de Ahorro'],
            ['name' => 'Cuenta de Ahorro a Plazo Fijo'],
        ];
        \DB::table('banks_account_types')->insert($bankAccountTypes);
        $this->command->info('Bank Account Type table seeded!');
    }
}
