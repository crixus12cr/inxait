<?php

namespace Database\Seeders\Cities;

use App\Models\City;
use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $meta = Province::create([
            "abbr" => "MET",
            "code" => "50",
            "name" => "META",
        ]);

        $cities = [
            '50251' => 'EL CASTILLO',
            '50270' => 'EL DORADO',
            '50287' => 'FUENTE DE ORO',
            '50313' => 'GRANADA',
            '50350' => 'LA MACARENA',
            '50370' => 'LA URIBE',
            '50400' => 'LEJANÍAS',
            '50325' => 'MAPIRIPaN',
            '50330' => 'MESETAS',
            '50450' => 'PUERTO CONCORDIA',
            '50577' => 'PUERTO LLERAS',
            '50590' => 'PUERTO RICO',
            '50683' => 'SAN JUAN DE ARAMA',
            '50711' => 'VISTA HERMOSA',
            '50001' => 'VILLAVICENCIO',
            '50006' => 'ACACIAS',
            '50110' => 'BARRANCA DE UPIA',
            '50150' => 'CASTILLA LA NUEVA',
            '50226' => 'CUMARAL',
            '50245' => 'EL CALVARIO',
            '50318' => 'GUAMAL',
            '50606' => 'RESTREPO',
            '50680' => 'SAN CARLOS GUAROA',
            '50686' => 'SAN JUANITO',
            '50223' => 'SAN LUIS DE CUBARRAL',
            '50689' => 'SAN MARTÍN',
            '50124' => 'CABUYARO',
            '50568' => 'PUERTO GAITÁN',
            '50573' => 'PUERTO LOPEZ',
        ];

        foreach ($cities as $code => $name) {
            City::create([
                'province_id' => $meta->id,
                'code' => $code,
                'name' => $name,
            ]);
        }
    }
}
