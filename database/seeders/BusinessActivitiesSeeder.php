<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusinessActivitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $businessActivities = [
            ['name' => 'Servicios Profesionales de Salud'],
            ['name' => 'Servicios Profesionales de Educación'],
            ['name' => 'Servicios Profesionales de Tecnología'],
            ['name' => 'Servicios Profesionales de Consultoría'],
            ['name' => 'Servicios Profesionales de Marketing'],
            ['name' => 'Servicios Profesionales de Finanzas'],
            ['name' => 'Servicios Profesionales de Derecho'],
            ['name' => 'Servicios Profesionales de Ingeniería'],
            ['name' => 'Servicios Profesionales de Arquitectura'],
            ['name' => 'Servicios Profesionales de Diseño'],
            ['name' => 'Servicios Profesionales de Contabilidad'],
            ['name' => 'Servicios Profesionales de Recursos Humanos'],
            ['name' => 'Servicios Profesionales de Publicidad'],
            ['name' => 'Servicios Profesionales de Investigación'],
            ['name' => 'Servicios Profesionales de Traducción'],
            ['name' => 'Servicios Profesionales de Fotografía'],
            ['name' => 'Servicios Profesionales de Producción Audiovisual'],
            ['name' => 'Servicios Profesionales de Limpieza'],
            ['name' => 'Servicios Profesionales de Seguridad'],
            ['name' => 'Servicios Profesionales de Mantenimiento'],
            ['name' => 'Actividad Comercial'],
            ['name' => 'Actividad de Servicios'],
            ['name' => 'Actividad Industrial'],
            ['name' => 'Actividad Agrícola'],
            ['name' => 'Actividad Ganadera'],
            ['name' => 'Actividad Forestal'],
            ['name' => 'Actividad Pesquera'],
            ['name' => 'Actividad Minera'],
            ['name' => 'Actividad de Construcción'],
            ['name' => 'Actividad de Transporte'],
        ];
        \DB::table('business_activities')->insert($businessActivities);
        $this->command->info('Business Activity table seeded!');
    }
}
