<?php

namespace Database\Seeders;

use App\Models\WorldFederation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorldFederationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $worldFederations = [
            [
                'id' => 1,
                'name' => 'FIFA',
            ] 
        ];

        foreach($worldFederations as $worldFederation){
            WorldFederation::create($worldFederation);
        }
    }
}
