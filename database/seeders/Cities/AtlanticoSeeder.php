<?php

namespace Database\Seeders\Cities;

use App\Models\City;
use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AtlanticoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $atlantico = Province::create([
            "abbr" => "ATL",
            "code" => "08",
            "name" => "ATLÁNTICO"
        ]);

        $cities = [
            '08001' => 'BARRANQUILLA',
            '08296' => 'GALAPA',
            '08433' => 'MALAMBO',
            '08573' => 'PUERTO COLOMBIA',
            '08758' => 'SOLEDAD',
            '08137' => 'CAMPO DE LA CRUZ',
            '08141' => 'CANDELARIA',
            '08421' => 'LURUACO',
            '08436' => 'MANATÍ',
            '08606' => 'REPELÓN',
            '08675' => 'SANTA LUCÍA',
            '08770' => 'SUAN',
            '08078' => 'BARANOA',
            '08520' => 'PALMAR DE VARELA',
            '08558' => 'POLONUEVO',
            '08560' => 'PONEDERA',
            '08634' => 'SABANAGRANDE',
            '08638' => 'SABANALARGA',
            '08685' => 'SANTO TOMÁS',
            '08372' => 'JUAN DE ACOSTA',
            '08549' => 'PIOJÓ',
            '08832' => 'TUBARÁ',
            '08849' => 'USIACURÍ',
        ];

        foreach ($cities as $code => $name) {
            City::create([
                'province_id' => $atlantico->id,
                'code' => $code,
                'name' => $name,
            ]);
        }
    }
}
