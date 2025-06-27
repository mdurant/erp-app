<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusinessUnitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $businessUnits = [
            ['name' => 'Diagnósticos Médicos'],
            ['name' => 'Laboratorios Clínicos'],
            ['name' => 'Farmacias'],
            ['name' => 'Centros de Salud'],
            ['name' => 'Clínicas Veterinarias'],
            ['name' => 'Ópticas'],
            ['name' => 'Dentales'],
            ['name' => 'Hospitales Privados'],
            ['name' => 'Servicios de Emergencia Médica'],
            ['name' => 'Centros de Rehabilitación'],
            ['name' => 'Consultorios Médicos Privados'],
            ['name' => 'Centros de Imágenes Médicas'],
            ['name' => 'Servicios de Salud Ocupacional'],
            ['name' => 'Clínicas de Cirugía Estética'],
            ['name' => 'Centros de Atención Primaria'],
            ['name' => 'Servicios de Telemedicina'],
            ['name' => 'Centros de Salud Mental'],
            ['name' => 'Clínicas de Fertilidad'],
            ['name' => 'Servicios de Nutrición y Dietética'],
            ['name' => 'Centros de Atención Geriátrica'],
            ['name' => 'Clínicas de Reproducción Asistida'],
            ['name' => 'Servicios de Psicología Clínica'],
            ['name' => 'Centros de Diagnóstico por Imagen'],
            ['name' => 'Clínicas de Odontología Estética'],
            ['name' => 'Servicios de Fisioterapia y Rehabilitación'],
            ['name' => 'Centros de Atención Pediátrica'],
            ['name' => 'Clínicas de Cirugía General'],
            ['name' => 'Servicios de Salud Preventiva'],
            ['name' => 'Centros de Atención Oftalmológica'],
            ['name' => 'Clínicas de Dermatología'],
        ];
        \DB::table('business_activities')->insert($businessUnits);
        $this->command->info('Business Units table seeded!');
    }
}
