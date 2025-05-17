<?php

namespace Database\Seeders\Cities;

use App\Models\City;
use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ValleDelCaucaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $valle = Province::create([
            "abbr" => "VAC",
            "code" => "76",
            "name" => "VALLE DEL CAUCA",
        ]);

        $cities = [
            "76036" => "ANDALUCÍA",
            "76111" => "BUGA",
            "76113" => "BUGALAGRANDE",
            "76126" => "CALIMA",
            "76248" => "EL CERRITO",
            "76306" => "GINEBRA",
            "76318" => "GUACARÍ",
            "76606" => "RESTREPO",
            "76616" => "RIOFRIO",
            "76670" => "SAN PEDRO",
            "76828" => "TRUJILLO",
            "76834" => "TULUÁ",
            "76890" => "YOTOCO",
            "76020" => "ALCALÁ",
            "76041" => "ANSERMANUEVO",
            "76054" => "ARGELIA",
            "76100" => "BOLÍVAR",
            "76147" => "CARTAGO",
            "76243" => "EL ÁGUILA",
            "76246" => "EL CAIRO",
            "76250" => "EL DOVIO",
            "76400" => "LA UNIÓN",
            "76403" => "LA VICTORIA",
            "76497" => "OBANDO",
            "76622" => "ROLDANILLO",
            "76823" => "TORO",
            "76845" => "ULLOA",
            "76863" => "VERSALLES",
            "76895" => "ZARZAL",
            "76109" => "BUENAVENTURA",
            "76122" => "CAICEDONIA",
            "76736" => "SEVILLA",
            "76001" => "CALI",
            "76130" => "CANDELARIA",
            "76233" => "DAGUA",
            "76275" => "FLORIDA",
            "76364" => "JAMUNDÍ",
            "76377" => "LA CUMBRE",
            "76520" => "PALMIRA",
            "76563" => "PRADERA",
            "76869" => "VIJES",
            "76892" => "YUMBO",
        ];

        foreach ($cities as $code => $name) {
            City::create([
                'province_id' => $valle->id,
                'code' => $code,
                'name' => $name,
            ]);
        }
    }
}
