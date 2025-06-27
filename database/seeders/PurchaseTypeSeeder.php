<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PurchaseTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $purchaseTypesData = [
            [
                'name' => 'Del Giro',
                'description' => 'Compras relacionadas directamente con la actividad principal del negocio.',
                'status' => 'active',
            ],
            [
                'name' => 'Supermercados',
                'description' => 'Gastos en supermercados para la oficina o necesidades generales.',
                'status' => 'active',
            ],
            [
                'name' => 'Bienes Raíces',
                'description' => 'Adquisición o gastos relacionados con propiedades o terrenos.',
                'status' => 'active',
            ],
            [
                'name' => 'Activo Fijo',
                'description' => 'Adquisición de bienes duraderos para uso en la operación del negocio.',
                'status' => 'active',
            ],
            [
                'name' => 'Iva Uso Común',
                'description' => 'IVA que puede ser recuperado y es de uso común en las operaciones.',
                'status' => 'active',
            ],
            [
                'name' => 'Iva No Recuperable',
                'description' => 'IVA que no puede ser recuperado o descontado fiscalmente.',
                'status' => 'active',
            ],
        ];
        \DB::table('purchase_types')->insert($purchaseTypesData);
        $this->command->info('Purchase type table seeded!');
    }
}
