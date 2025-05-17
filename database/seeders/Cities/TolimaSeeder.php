<?php

namespace Database\Seeders\Cities;

use App\Models\City;
use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TolimaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tolima = Province::create([
            "abbr" => "TOL",
            "code" => "73",
            "name" => "TOLIMA",
        ]);

        $cities = [
            '73030' => 'AMBALEMA',
            '73055' => 'ARMERO',
            '73270' => 'FALAN',
            '73283' => 'FRESNO',
            '73349' => 'HONDA',
            '73443' => 'MARIQUITA',
            '73520' => 'PALOCABILDO',
            '73148' => 'CARMEN DE APICALÁ',
            '73226' => 'CUNDAY',
            '73352' => 'ICONONZO',
            '73449' => 'MELGAR',
            '73873' => 'VILLARRICA',
            '73067' => 'ATACO',
            '73168' => 'CHAPARRAL',
            '73217' => 'COYAIMA',
            '73483' => 'NATAGAIMA',
            '73504' => 'ORTEGA',
            '73555' => 'PLANADAS',
            '73616' => 'RIOBLANCO',
            '73622' => 'RONCESVALLES',
            '73675' => 'SAN ANTONIO',
            '73026' => 'ALVARADO',
            '73043' => 'ANZOÁTEGUI',
            '73124' => 'CAJAMARCA',
            '73200' => 'COELLO',
            '73268' => 'ESPINAL',
            '73275' => 'FLANDES',
            '73001' => 'IBAGUE',
            '73547' => 'PIEDRAS',
            '73624' => 'ROVIRA',
            '73678' => 'SAN LUIS',
            '73854' => 'VALLE DE SAN JUAN',
            '73024' => 'ALPUJARRA',
            '73236' => 'DOLORES',
            '73319' => 'GUAMO',
            '73563' => 'PRADO',
            '73585' => 'PURIFICACIÓN',
            '73671' => 'SALDAÑA',
            '73770' => 'SUÁREZ',
            '73152' => 'CASABIANCA',
            '73347' => 'HERVEO',
            '73408' => 'LERIDA',
            '73411' => 'LIBANO',
            '73461' => 'MURILLO',
            '73686' => 'SANTA ISABEL',
            '73861' => 'VENADILLO',
            '73870' => 'VILLAHERMOSA',
        ];

        foreach ($cities as $code => $name) {
            City::create([
                'province_id' => $tolima->id,
                'code' => $code,
                'name' => $name,
            ]);
        }
    }
}
