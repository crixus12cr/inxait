<?php

namespace Database\Seeders\Cities;

use App\Models\City;
use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuainiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $guainia = Province::create([
            "abbr" => "GUA",
            "code" => "94",
            "name" => "GUAINÍA",
        ]);


        $cities = [
            '94343' => 'BARRANCO MINA',
            '94886' => 'CACAHUAL',
            '94001' => 'INÍRIDA',
            '94885' => 'LA GUADALUPE',
            '94663' => 'MAPIRIPaN',
            '94888' => 'MORICHAL',
            '94887' => 'PANA PANA',
            '94884' => 'PUERTO COLOMBIA',
            '94883' => 'SAN FELIPE',
        ];

        foreach ($cities as $code => $name) {
            City::create([
                'province_id' => $guainia->id,
                'code' => $code,
                'name' => $name,
            ]);
        }

    }
}
