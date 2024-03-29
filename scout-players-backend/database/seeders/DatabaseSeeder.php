<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            WorldFederationSeeder::class,
            ContinentSeeder::class,
            CountrySeeder::class,
            ContinentFederationSeeder::class,
            NationalFederationSeeder::class
        ]);
    }
}
