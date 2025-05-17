<?php

namespace Database\Seeders\Cities;

use App\Models\City;
use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AraucaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $arauca = Province::create([
            'abbr' => "ARU",
            'code' => "81",
            'name' => "ARAUCA",
        ]);

        $cities = [
            '81001' => 'ARAUCA',
            '81065' => 'ARAUQUITA',
            '81220' => 'CRAVO NORTE',
            '81300' => 'FORTUL',
            '81591' => 'PUERTO RONDÓN',
            '81736' => 'SARAVENA',
            '81794' => 'TAME',
        ];

        foreach ($cities as $code => $name) {
            City::create([
                'province_id' => $arauca->id,
                'code' => $code,
                'name' => $name,
            ]);
        }
    }
}
