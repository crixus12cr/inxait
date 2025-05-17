<?php

namespace Database\Seeders\Cities;

use App\Models\City;
use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CasanareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $casanare = Province::create([
            "abbr" => "CAS",
            "code" => "85",
            "name" => "CASANARE",
        ]);

        $cities = [
            '85010' => 'AGUAZUL',
            '85015' => 'CHAMEZA',
            '85125' => 'HATO COROZAL',
            '85136' => 'LA SALINA',
            '85139' => 'MANÍ',
            '85162' => 'MONTERREY',
            '85225' => 'NUNCHÍA',
            '85230' => 'OROCUÉ',
            '85250' => 'PAZ DE ARIPORO',
            '85263' => 'PORE',
            '85279' => 'RECETOR',
            '85300' => 'SABANALARGA',
            '85315' => 'SÁCAMA',
            '85325' => 'SAN LUIS DE PALENQUE',
            '85400' => 'TÁMARA',
            '85410' => 'TAURAMENA',
            '85430' => 'TRINIDAD',
            '85440' => 'VILLANUEVA',
            '85001' => 'YOPAL',
        ];

        foreach ($cities as $code => $name) {
            City::create([
                'province_id' => $casanare->id,
                'code' => $code,
                'name' => $name,
            ]);
        }
    }
}
