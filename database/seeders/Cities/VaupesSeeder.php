<?php

namespace Database\Seeders\Cities;

use App\Models\City;
use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VaupesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vaupes = Province::create([
            "abbr" => "VAU",
            "code" => "97",
            "name" => "VAUPÉS",
        ]);

        $cities = [
            "97161" => "CARURU",
            "97001" => "MITÚ",
            "97511" => "PACOA",
            "97777" => "PAPUNAHUA",
            "97666" => "TARAIRA",
            "97889" => "YAVARATÉ",
        ];

        foreach ($cities as $code => $name) {
            City::create([
                'province_id' => $vaupes->id,
                'code' => $code,
                'name' => $name,
            ]);
        }
    }
}
