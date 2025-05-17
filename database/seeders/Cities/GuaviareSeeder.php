<?php

namespace Database\Seeders\Cities;

use App\Models\City;
use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuaviareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $guaviare = Province::create([
            "abbr" => "GUV",
            "code" => "95",
            "name" => "GUAVIARE",
        ]);

        $cities = [
            '95015' => 'CALAMAR',
            '95025' => 'EL RETORNO',
            '95200' => 'MIRAFLORES',
            '95001' => 'SAN JOSÉ DEL GUAVIARE',
        ];

        foreach ($cities as $code => $name) {
            City::create([
                'province_id' => $guaviare->id,
                'code' => $code,
                'name' => $name,
            ]);
        }

    }
}
