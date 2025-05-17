<?php

namespace Database\Seeders;

use App\Models\TypeIdentification;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeIdentificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            "Cédula",
            "Tarjeta de identidad",
            "Nit",
            "Pasaporte",
            "Cédula de extranjería"
        ];

        foreach ($types as $type) {
            TypeIdentification::create([
                "name" => $type
            ]);
        }
    }
}
