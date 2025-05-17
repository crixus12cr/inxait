<?php

namespace Database\Seeders\Cities;

use App\Models\City;
use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CaquetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $caqueta = Province::create([
            "abbr" => "CAQ",
            "code" => "18",
            "name" => "CAQUETÁ",
        ]);

        $cities = [
            '18029' => 'ALBANIA',
            '18094' => 'BELÉN DE LOS ANDAQUIES',
            '18150' => 'CARTAGENA DEL CHAIRÁ',
            '18205' => 'CURRILLO',
            '18247' => 'EL DONCELLO',
            '18256' => 'EL PAUJIL',
            '18001' => 'FLORENCIA',
            '18410' => 'LA MONTAÑITA',
            '18460' => 'MILÁN',
            '18479' => 'MORELIA',
            '18592' => 'PUERTO RICO',
            '18610' => 'SAN JOSE DEL FRAGUA',
            '18753' => 'SAN VICENTE DEL CAGUÁN',
            '18756' => 'SOLANO',
            '18785' => 'SOLITA',
            '18860' => 'VALPARAISO',
        ];

        foreach ($cities as $code => $name) {
            City::create([
                'province_id' => $caqueta->id,
                'code' => $code,
                'name' => $name,
            ]);
        }
    }
}
