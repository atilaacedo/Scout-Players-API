<?php

namespace Database\Seeders;

use App\Models\ContinentFederation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContinentFederationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $continentFederations = [
            [
                "name"=> "CONMEMBOL",
                "continent_id" => 2,
                "world_federation_id" => 1
            ],
            [
                "name" => "UEFA",
                "continent_id" => 2,
                "world_federation_id"=> 1
            ],
            [
                "name" => "AFC",
                "continent_id"=> 6,
                "world_federation_id" => 1
            ]
        ];

        foreach( $continentFederations as $continentFederation ) {
            ContinentFederation::create($continentFederation);
        }
    }
}
