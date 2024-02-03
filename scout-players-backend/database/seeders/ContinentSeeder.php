<?php

namespace Database\Seeders;

use App\Models\Continent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContinentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $continents = ['Europa', 'América do Sul', 'América do Norte', 'América Central', 'Oceania', 'Ásia', 'África'];

        foreach ($continents as $continent) {
            Continent::create([
                'name' => $continent
            ]);
        }
    }
}
