<?php

namespace Database\Seeders\Cities;

use App\Models\City;
use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AmazonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $amazonas = Province::create([
            'abbr' => "AMZ",
            'code' => "91",
            'name' => "AMAZONAS",
        ]);


        $cities = [
            '91263' => 'EL ENCANTO',
            '91405' => 'LA CHORRERA',
            '91407' => 'LA PEDRERA',
            '91430' => 'LA VICTORIA',
            '91001' => 'LETICIA',
            '91460' => 'MIRITI - PARANÁ',
            '91530' => 'PUERTO ALEGRIA',
            '91536' => 'PUERTO ARICA',
            '91540' => 'PUERTO NARIÑO',
            '91669' => 'PUERTO SANTANDER',
            '91798' => 'TARAPACÁ',
        ];

        foreach ($cities as $code => $name) {
            City::create([
                'province_id' => $amazonas->id,
                'code' => $code,
                'name' => $name,
            ]);
        }
    }
}
