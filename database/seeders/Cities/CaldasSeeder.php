<?php

namespace Database\Seeders\Cities;

use App\Models\City;
use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CaldasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $caldas = Province::create([
            "abbr" => "CAL",
            "code" => "17",
            "name" => "CALDAS",
        ]);

        $cities = [
            '17272' => 'FILADELFIA',
            '17388' => 'LA MERCED',
            '17442' => 'MARMATO',
            '17614' => 'RIOSUCIO',
            '17777' => 'SUPÍA',
            '17433' => 'MANZANARES',
            '17444' => 'MARQUETALIA',
            '17446' => 'MARULANDA',
            '17541' => 'PENSILVANIA',
            '17042' => 'ANSERMA',
            '17088' => 'BELALCÁZAR',
            '17616' => 'RISARALDA',
            '17665' => 'SAN JOSÉ',
            '17877' => 'VITERBO',
            '17174' => 'CHINCHINÁ',
            '17001' => 'MANIZALES',
            '17486' => 'NEIRA',
            '17524' => 'PALESTINA',
            '17873' => 'VILLAMARÍA',
            '17013' => 'AGUADAS',
            '17050' => 'ARANZAZU',
            '17513' => 'PÁCORA',
            '17653' => 'SALAMINA',
            '17380' => 'LA DORADA',
            '17495' => 'NORCASIA',
            '17662' => 'SAMANÁ',
            '17867' => 'VICTORIA',
        ];

        foreach ($cities as $code => $name) {
            City::create([
                'province_id' => $caldas->id,
                'code' => $code,
                'name' => $name,
            ]);
        }
    }
}
