<?php

namespace Database\Seeders;

use App\Models\NationalFederation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NationalFederationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nationalFederations = [
            [
                "name" => "CBF",
                "country_id" => 26,
                "continent_federation_id" => 1
            ],
            [
                "name" => "NFF",
                "country_id" => 130,
                "continent_federation_id" => 2
            ],
            [
                "name" => "FA",
                "country_id" => 143,
                "continent_federation_id" => 2
            ],
        ];
        
        foreach ($nationalFederations as $nationalFederation) {
            NationalFederation::create($nationalFederation);
        }
    }
}
