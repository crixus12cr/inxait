<?php

namespace Database\Seeders\Cities;

use App\Models\City;
use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CaucaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $cauca = Province::create([
            "abbr" => "CAU",
            "code" => "19",
            "name" => "CAUCA",
        ]);

        $cities = [
            '19130' => 'CAJIBÍO',
            '19256' => 'EL TAMBO',
            '19392' => 'LA SIERRA',
            '19473' => 'MORALES',
            '19548' => 'PIENDAMO',
            '19001' => 'POPAYÁN',
            '19622' => 'ROSAS',
            '19760' => 'SOTARA',
            '19807' => 'TIMBIO',
            '19110' => 'BUENOS AIRES',
            '19142' => 'CALOTO',
            '19212' => 'CORINTO',
            '19455' => 'MIRANDA',
            '19513' => 'PADILLA',
            '19573' => 'PUERTO TEJADA',
            '19698' => 'SANTANDER DE QUILICHAO',
            '19780' => 'SUAREZ',
            '19845' => 'VILLA RICA',
            '19318' => 'GUAPI',
            '19418' => 'LOPEZ',
            '19809' => 'TIMBIQUI',
            '19137' => 'CALDONO',
            '19355' => 'INZÁ',
            '19364' => 'JAMBALO',
            '19517' => 'PAEZ',
            '19585' => 'PURACE',
            '19743' => 'Silvia',
            '19821' => 'TORIBIO',
            '19824' => 'TOTORO',
            '19022' => 'ALMAGUER',
            '19050' => 'ARGELIA',
            '19075' => 'BALBOA',
            '19100' => 'BOLÍVAR',
            '19290' => 'FLORENCIA',
            '19397' => 'LA VEGA',
            '19450' => 'MERCADERES',
            '19532' => 'PATIA',
            '19533' => 'PIAMONTE',
            '19693' => 'SAN SEBASTIAN',
            '19701' => 'SANTA ROSA',
            '19785' => 'SUCRE',
        ];

        foreach ($cities as $code => $name) {
            City::create([
                'province_id' => $cauca->id,
                'code' => $code,
                'name' => $name,
            ]);
        }
    }
}
