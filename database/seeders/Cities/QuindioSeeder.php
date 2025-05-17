<?php

namespace Database\Seeders\Cities;

use App\Models\City;
use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuindioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $quindio = Province::create([
            "abbr" => "QUI",
            "code" => "63",
            "name" => "QUINDÍO",
        ]);

        $cities = [
            '63001' => 'ARMENIA',
            '63111' => 'BUENAVISTA',
            '63130' => 'CALARCA',
            '63212' => 'CORDOBA',
            '63302' => 'GENOVA',
            '63548' => 'PIJAO',
            '63272' => 'FILANDIA',
            '63690' => 'SALENTO',
            '63190' => 'CIRCASIA',
            '63401' => 'LA TEBAIDA',
            '63470' => 'MONTENEGRO',
            '63594' => 'QUIMBAYA',
        ];

        foreach ($cities as $code => $name) {
            City::create([
                'province_id' => $quindio->id,
                'code' => $code,
                'name' => $name,
            ]);
        }
    }
}
