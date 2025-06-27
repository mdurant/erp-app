<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            ['name' => 'Santiago'],
            ['name' => 'Valparaíso'],
            ['name' => 'Concepción'],
            ['name' => 'La Serena'],
            ['name' => 'Antofagasta'],
            ['name' => 'Temuco'],
            ['name' => 'Puerto Montt'],
            ['name' => 'Rancagua'],
            ['name' => 'Talca'],
            ['name' => 'Iquique'],
            ['name' => 'Arica'],
            ['name' => 'Coquimbo'],
            ['name' => 'Osorno'],
            ['name' => 'Chillán'],
            ['name' => 'Calama'],
            ['name' => 'Punta Arenas'],
            ['name' => 'Copiapó'],
            ['name' => 'Los Ángeles'],
            ['name' => 'Curicó'],
            ['name' => 'San Antonio'],
            ['name' => 'Quillota'],
            ['name' => 'Melipilla'],
            ['name' => 'San Fernando'],
            ['name' => 'Villa Alemana'],
            ['name' => 'La Calera'],
        ];
        \DB::table('cities')->insert($cities);
        $this->command->info('City table seeded!');
    }
}
