<?php

namespace Database\Seeders\Cities;

use App\Models\City;
use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CordobaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cordoba = Province::create([
            "abbr" => "COR",
            "code" => "23",
            "name" => "CÓRDOBA",
        ]);

        $cities = [
            '23807' => 'TIERRALTA',
            '23855' => 'VALENCIA',
            '23168' => 'CHIMÁ',
            '23300' => 'COTORRA',
            '23417' => 'LORICA',
            '23464' => 'MOMIL',
            '23586' => 'PURÍSIMA',
            '23001' => 'MONTERÍA',
            '23090' => 'CANALETE',
            '23419' => 'LOS CÓRDOBAS',
            '23500' => 'MOÑITOS',
            '23574' => 'PUERTO ESCONDIDO',
            '23672' => 'SAN ANTERO',
            '23675' => 'SAN BERNARDO DEL VIENTO',
            '23182' => 'CHINÚ',
            '23660' => 'SAHAGÚN',
            '23670' => 'SAN ANDRÉS SOTAVENTO',
            '23068' => 'AYAPEL',
            '23079' => 'BUENAVISTA',
            '23350' => 'LA APARTADA',
            '23466' => 'MONTELÍBANO',
            '23555' => 'PLANETA RICA',
            '23570' => 'PUEBLO NUEVO',
            '23580' => 'PUERTO LIBERTADOR',
            '23162' => 'CERETÉ',
            '23189' => 'CIÉNAGA DE ORO',
            '23678' => 'SAN CARLOS',
            '23686' => 'SAN PELAYO',
        ];

        foreach ($cities as $code => $name) {
            City::create([
                'province_id' => $cordoba->id,
                'code' => $code,
                'name' => $name,
            ]);
        }
    }
}
