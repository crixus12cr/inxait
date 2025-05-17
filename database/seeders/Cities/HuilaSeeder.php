<?php

namespace Database\Seeders\Cities;

use App\Models\City;
use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HuilaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $huila = Province::create([
            "abbr" => "HUI",
            "code" => "41",
            "name" => "HUILA",
        ]);

        $cities = [
            '41013' => 'AGRADO',
            '41026' => 'ALTAMIRA',
            '41298' => 'GARZÓN',
            '41306' => 'GIGANTE',
            '41319' => 'GUADALUPE',
            '41548' => 'PITAL',
            '41770' => 'SUAZA',
            '41791' => 'TARQUI',
            '41016' => 'AIPE',
            '41020' => 'ALGECIRAS',
            '41078' => 'BARAYA',
            '41132' => 'CAMPOALEGRE',
            '41206' => 'COLOMBIA',
            '41349' => 'HOBO',
            '41357' => 'IQUIRA',
            '41001' => 'NEIVA',
            '41524' => 'PALERMO',
            '41615' => 'RIVERA',
            '41676' => 'SANTA MARÍA',
            '41799' => 'TELLO',
            '41801' => 'TERUEL',
            '41872' => 'VILLAVIEJA',
            '41885' => 'YAGUARÁ',
            '41378' => 'LA ARGENTINA',
            '41396' => 'LA PLATA',
            '41483' => 'NÁTAGA',
            '41518' => 'PAICOL',
            '41797' => 'TESALIA',
            '41006' => 'ACEVEDO',
            '41244' => 'ELÍAS',
            '41359' => 'ISNOS',
            '41503' => 'OPORAPA',
            '41530' => 'PALESTINA',
            '41551' => 'PITALITO',
            '41660' => 'SALADOBLANCO',
            '41668' => 'SAN AGUSTÍN',
            '41807' => 'TIMANÁ',
        ];

        foreach ($cities as $code => $name) {
            City::create([
                'province_id' => $huila->id,
                'code' => $code,
                'name' => $name,
            ]);
        }
    }
}
