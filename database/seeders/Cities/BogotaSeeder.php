<?php

namespace Database\Seeders\Cities;

use App\Models\City;
use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BogotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bogota = Province::create([
            "abbr" => "BOG",
            "code" => "11",
            "name" => "BOGOTÁ D.C."
        ]);

        City::create([
            'province_id' => $bogota->id,
            'code' => '11001',
            'name' => "BOGOTÁ D.C."
        ]);
    }
}
