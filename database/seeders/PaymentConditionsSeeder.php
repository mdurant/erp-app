<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentConditionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $paymentConditions = [
            ['name' => 'Contado'],
            ['name' => 'Crédito 30 días'],
            ['name' => 'Crédito 60 días'],
            ['name' => 'Crédito 90 días'],
            ['name' => 'Crédito 120 días'],
        ];
        \DB::table('payment_conditions')->insert($paymentConditions);
        $this->command->info('Payment Conditions table seeded!');
    }
}
