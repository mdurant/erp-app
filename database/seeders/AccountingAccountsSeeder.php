<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccountingAccountsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $accountingAccounts = [
            ['name' => 'Caja', 'code' => '1001'],
            ['name' => 'Bancos', 'code' => '1002'],
            ['name' => 'Clientes', 'code' => '1101'],
            ['name' => 'Proveedores', 'code' => '2101'],
            ['name' => 'Inventarios', 'code' => '1201'],
            ['name' => 'Activos Fijos', 'code' => '1301'],
            ['name' => 'Capital Social', 'code' => '3001'],
            ['name' => 'Utilidades Retenidas', 'code' => '3101'],
            ['name' => 'Ingresos por Ventas', 'code' => '4001'],
            ['name' => 'Gastos de Operación', 'code' => '5001'],
        ];
        \DB::table('accounting_accounts')->insert($accountingAccounts);
        $this->command->info('Accounting Account table seeded!');
    }
}
