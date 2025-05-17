<?php

namespace Database\Seeders;

use App\Models\Habea;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HabeaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Habea::create([
            'autorization_description' => "Autorizo el tratamiento de mis datos de acuerdo con la finalidad establecida en la política de protección de datos personales.",
            'status' => true,
        ]);
    }
}
