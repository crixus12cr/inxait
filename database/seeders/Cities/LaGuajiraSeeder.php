<?php

namespace Database\Seeders\Cities;

use App\Models\City;
use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LaGuajiraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $guajira = Province::create([
            "abbr" => "GUJ",
            "code" => "44",
            "name" => "LA GUAJIRA",
        ]);

        $cities = [
            '44035' => 'ALBANIA',
            '44090' => 'DIBULLA',
            '44430' => 'MAICAO',
            '44560' => 'MANAURE',
            '44001' => 'RIOHACHA',
            '44847' => 'URIBIA',
            '44078' => 'BARRANCAS',
            '44098' => 'DISTRACCION',
            '44110' => 'EL MOLINO',
            '44279' => 'FONSECA',
            '44378' => 'HATONUEVO',
            '44420' => 'LA JAGUA DEL PILAR',
            '44650' => 'SAN JUAN DEL CESAR',
            '44855' => 'URUMITA',
            '44874' => 'VILLANUEVA',
        ];

        foreach ($cities as $code => $name) {
            City::create([
                'province_id' => $guajira->id,
                'code' => $code,
                'name' => $name,
            ]);
        }
    }
}
