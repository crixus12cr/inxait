<?php

namespace Database\Seeders\Cities;

use App\Models\City;
use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CesarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cesar = Province::create([
            "abbr" => "CES",
            "code" => "20",
            "name" => "CESAR",
        ]);

        $cities = [
            '20045' => 'BECERRIL',
            '20175' => 'CHIMICHAGUA',
            '20178' => 'CHIRIGUANÁ',
            '20228' => 'CURUMANÍ',
            '20400' => 'LA JAGUA DE IBIRICO',
            '20517' => 'PAILITAS',
            '20787' => 'TAMALAMEQUE',
            '20032' => 'ASTREA',
            '20060' => 'BOSCONIA',
            '20238' => 'EL COPEY',
            '20250' => 'EL PASO',
            '20013' => 'AGUSTÍN CODAZZI',
            '20621' => 'LA PAZ',
            '20443' => 'MANAURE',
            '20570' => 'PUEBLO BELLO',
            '20750' => 'SAN DIEGO',
            '20001' => 'VALLEDUPAR',
            '20011' => 'AGUACHICA',
            '20295' => 'GAMARRA',
            '20310' => 'GONZÁLEZ',
            '20383' => 'LA GLORIA',
            '20550' => 'PELAYA',
            '20614' => 'RÍO DE ORO',
            '20710' => 'SAN ALBERTO',
            '20770' => 'SAN MARTÍN',
        ];

        foreach ($cities as $code => $name) {
            City::create([
                'province_id' => $cesar->id,
                'code' => $code,
                'name' => $name,
            ]);
        }

    }
}
