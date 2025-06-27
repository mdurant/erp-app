<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PurchaseConceptsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $purchaseConcepts = [
            ['name' => 'Compra de Mercaderías', 'account_code' => 1],
            ['name' => 'Compra de Servicios', 'account_code' => 2],
            ['name' => 'Compra de Activos Fijos', 'account_code' => 1],
            ['name' => 'Compra de Materias Primas', 'account_code' => 1],
            ['name' => 'Compra de Bienes de Consumo', 'account_code' => 2],
            ['name' => 'Compra de Inventarios', 'account_code' => 2],
        ];
        \DB::table('purchase_concepts')->insert($purchaseConcepts);
        $this->command->info('Purchase Concepts table seeded!');
    }
}
