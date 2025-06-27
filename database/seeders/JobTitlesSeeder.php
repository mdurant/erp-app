<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobTitlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobTitles = [
            ['name' => 'Software Engineer'],
            ['name' => 'Data Scientist'],
            ['name' => 'Product Manager'],
            ['name' => 'UX/UI Designer'],
            ['name' => 'DevOps Engineer'],
            ['name' => 'Quality Assurance Engineer'],
            ['name' => 'Systems Analyst'],
            ['name' => 'Network Administrator'],
            ['name' => 'Database Administrator'],
            ['name' => 'Technical Support Specialist'],
        ];
        \DB::table('job_titles')->insert($jobTitles);
        $this->command->info('Job Title table seeded!');
    }
}
