<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PriceListsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $priceLists = [
            ['name' => 'Lista de Precios Básica'],
            ['name' => 'Lista de Precios Premium'],
            ['name' => 'Lista de Precios de Temporada'],
            ['name' => 'Lista de Precios Corporativa'],
            ['name' => 'Lista de Precios Mayorista'],
        ];
        \DB::table('price_lists')->insert($priceLists);
        $this->command->info('Price List table seeded!');
    }
}
