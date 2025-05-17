<?php

namespace Database\Seeders\Cities;

use App\Models\City;
use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RisaraldaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $risaralda = Province::create([
            "abbr" => "RIS",
            "code" => "66",
            "name" => "RISARALDA",
        ]);

        $cities = [
            '66170' => 'DOSQUEBRADAS',
            '66400' => 'LA VIRGINIA',
            '66440' => 'MARSELLA',
            '66001' => 'PEREIRA',
            '66682' => 'SANTA ROSA DE CABAL',
            '66045' => 'APÍA',
            '66075' => 'BALBOA',
            '66088' => 'BELÉN DE UMBRÍA',
            '66318' => 'GUÁTICA',
            '66383' => 'LA CELIA',
            '66594' => 'QUINCHÍA',
            '66687' => 'SANTUARIO',
            '66456' => 'MISTRATÓ',
            '66572' => 'PUEBLO RICO',
        ];

        foreach ($cities as $code => $name) {
            City::create([
                'province_id' => $risaralda->id,
                'code' => $code,
                'name' => $name,
            ]);
        }
    }
}
