<?php

namespace Database\Seeders\Cities;

use App\Models\City;
use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VichadaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vichada = Province::create([
            "abbr" => "VIC",
            "code" => "99",
            "name" => "VICHADA",
        ]);

        $cities = [
            "99773" => "CUMARIBO",
            "99524" => "LA PRIMAVERA",
            "99001" => "PUERTO CARREÑO",
            "99624" => "SANTA ROSALÍA",
        ];

        foreach ($cities as $code => $name) {
            City::create([
                'province_id' => $vichada->id,
                'code' => $code,
                'name' => $name,
            ]);
        }
    }
}
