<?php

namespace Database\Seeders\Cities;

use App\Models\City;
use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SanAndresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sa = Province::create([
            "abbr" => "SAP",
            "code" => "88",
            "name" => "ARCHIPIÉLAGO DE SAN ANDRÉS. PROVIDENCIA Y SANTA CATALINA",
        ]);

        $cities = [
            '88564' => 'PROVIDENCIA Y SANTA CATALINA',
            '88001' => 'SAN ANDRÉS',
        ];

        foreach ($cities as $code => $name) {
            City::create([
                'province_id' => $sa->id,
                'code' => $code,
                'name' => $name,
            ]);
        }
    }
}
