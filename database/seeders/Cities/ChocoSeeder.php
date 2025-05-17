<?php

namespace Database\Seeders\Cities;

use App\Models\City;
use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChocoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $choco = Province::create([
            "abbr" => "CHO",
            "code" => "27",
            "name" => "CHOCÓ",
        ]);

        $cities = [
            '27050' => 'ATRATO',
            '27073' => 'BAGADÓ',
            '27099' => 'BOJAYÁ',
            '27245' => 'EL CARMEN DE ATRATO',
            '27413' => 'LLORÓ',
            '27425' => 'MEDIO ATRATO',
            '27001' => 'QUIBDÓ',
            '27600' => 'RÍO QUITO',
            '27006' => 'ACANDÍ',
            '27086' => 'BELÉN DE BAJIRA',
            '27150' => 'CARMÉN DEL DARIÉN',
            '27615' => 'RIOSUCIO',
            '27800' => 'UNGUÍA',
            '27075' => 'BAHÍA SOLANO',
            '27372' => 'JURADÓ',
            '27495' => 'NUQUÍ',
            '27025' => 'ALTO BAUDÓ',
            '27077' => 'BAJO BAUDÓ',
            '27250' => 'EL LITORAL DEL SAN JUAN',
            '27430' => 'MEDIO BAUDÓ',
            '27135' => 'CANTÓN DE SAN PABLO',
            '27160' => 'CERTEGUÍ',
            '27205' => 'CONDOTO',
            '27361' => 'ITSIMINA',
            '27450' => 'MEDIO SAN JUAN',
            '27491' => 'NÓVITA',
            '27580' => 'RÍO FRÍO',
            '27660' => 'SAN JOSÉ DEL PALMAR',
            '27745' => 'SIPÍ',
            '27787' => 'TADÓ',
            '27810' => 'UNIÓN PANAMERICANA',
        ];

        foreach ($cities as $code => $name) {
            City::create([
                'province_id' => $choco->id,
                'code' => $code,
                'name' => $name,
            ]);
        }
    }
}
