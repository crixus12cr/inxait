<?php

namespace Database\Seeders\Cities;

use App\Models\City;
use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NorteDeSantanderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nsantander = Province::create([
            "abbr" => "NOR",
            "code" => "54",
            "name" => "NORTE DE SANTANDER",
        ]);

        $cities = [
            '54051' => 'ARBOLEDAS',
            '54223' => 'CUCUTILLA',
            '54313' => 'GRAMALOTE',
            '54418' => 'LOURDES',
            '54660' => 'SALAZAR',
            '54680' => 'SANTIAGO',
            '54871' => 'VILLA CARO',
            '54109' => 'BUCARASICA',
            '54250' => 'EL TARRA',
            '54720' => 'SARDINATA',
            '54810' => 'TIBÚ',
            '54003' => 'ABREGO',
            '54128' => 'CACHIRÁ',
            '54206' => 'CONVENCIÓN',
            '54245' => 'EL CARMEN',
            '54344' => 'HACARÍ',
            '54385' => 'LA ESPERANZA',
            '54398' => 'LA PLAYA',
            '54498' => 'OCAÑA',
            '54670' => 'SAN CALIXTO',
            '54800' => 'TEORAMA',
            '54001' => 'CÚCUTA',
            '54261' => 'EL ZULIA',
            '54405' => 'LOS PATIOS',
            '54553' => 'PUERTO SANTANDER',
            '54673' => 'SAN CAYETANO',
            '54874' => 'VILLA DEL ROSARIO',
            '54125' => 'CÁCOTA',
            '54174' => 'CHITAGÁ',
            '54480' => 'MUTISCUA',
            '54518' => 'PAMPLONA',
            '54520' => 'PAMPLONITA',
            '54743' => 'SILOS',
            '54099' => 'BOCHALEMA',
            '54172' => 'CHINÁCOTA',
            '54239' => 'DURANIA',
            '54347' => 'HERRÁN',
            '54377' => 'LABATECA',
            '54599' => 'RAGONVALIA',
            '54820' => 'TOLEDO',
        ];

        foreach ($cities as $code => $name) {
            City::create([
                'province_id' => $nsantander->id,
                'code' => $code,
                'name' => $name,
            ]);
        }
    }
}
