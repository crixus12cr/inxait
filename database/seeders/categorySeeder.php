<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                "name" => "OPEN MASCULINO",
                "description" => "De 18 a 30 años"
            ],
            [
                "name" => "MASTER A MASCULINO",
                "description" => "De 31 a 40 años"
            ],
            [
                "name" => "MASTER B MASCULINO",
                "description" => "De 41 a 50 años"
            ],
            [
                "name" => "MASTER C MASCULINO",
                "description" => "De 51 a 59 años Gran master"
            ],
            [
                "name" => "GRAN MASTER",
                "description" => "Mayores de 60 años"
            ],
            [
                "name" => "OPEN FEMENINNO",
                "description" => "De 18 a 30 años"
            ],
            [
                "name" => "MASTER FEMENINO",
                "description" => "De 31 a 50 años"
            ],
            [
                "name" => "PAREJAS MIXTO",
                "description" => "1 Corredor masculino y 1 corredor femenino mayor de 18 años"
            ],
            [
                "name" => "GRAVEL",
                "description" => "Corredor masculino o femenino mayor de 18 años"
            ],
        ];

        foreach ($categories as $category) {
            Category::create([
                "name" => $category["name"],
                "description" => $category["description"],
                "status" => true
            ]);
        }
    }
}
