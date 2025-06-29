<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
            UsersSeeder::class,
            BanksSeeder::class,
            BanksAccountTypesSeeder::class,
            BusinessActivitiesSeeder::class,
            CitiesSeeder::class,
            CommunesSeeder::class,
            JobTitlesSeeder::class,
            AccountingAccountsSeeder::class,
            PriceListsSeeder::class,
            PaymentConditionsSeeder::class,
            PurchaseConceptsSeeder::class,
            BusinessUnitsSeeder::class,
            CompaniesSeeder::class,
            PurchaseTypeSeeder::class,
        ]);
    }
}
