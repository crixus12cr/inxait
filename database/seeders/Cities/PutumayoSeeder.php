<?php

namespace Database\Seeders\Cities;

use App\Models\City;
use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PutumayoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $putumayo = Province::create([
            "abbr" => "PUT",
            "code" => "86",
            "name" => "PUTUMAYO",
        ]);

        $cities = [
            '86219' => 'COLÓN',
            '86001' => 'MOCOA',
            '86320' => 'ORITO',
            '86568' => 'PUERTO ASIS',
            '86569' => 'PUERTO CAICEDO',
            '86571' => 'PUERTO GUZMAN',
            '86573' => 'PUERTO LEGUIZAMO',
            '86755' => 'SAN FRANCISCO',
            '86757' => 'SAN MIGUEL',
            '86760' => 'SANTIAGO',
            '86749' => 'SIBUNDOY',
            '86865' => 'VALLE DEL GUAMUEZ',
            '86885' => 'VILLA GARZON',
        ];

        foreach ($cities as $code => $name) {
            City::create([
                'province_id' => $putumayo->id,
                'code' => $code,
                'name' => $name,
            ]);
        }
    }
}
