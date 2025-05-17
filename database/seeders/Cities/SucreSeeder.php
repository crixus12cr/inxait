<?php

namespace Database\Seeders\Cities;

use App\Models\City;
use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SucreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sucre = Province::create([
            "abbr" => "SUC",
            "code" => "70",
            "name" => "SUCRE",
        ]);

        $cities = [
            '70265' => 'GUARANDA',
            '70429' => 'MAJAGUAL',
            '70771' => 'SUCRE',
            '70230' => 'CHALÁN',
            '70204' => 'COLOSO',
            '70473' => 'MORROA',
            '70508' => 'OVEJAS',
            '70001' => 'SINCELEJO',
            '70221' => 'COVEÑAS',
            '70523' => 'PALMITO',
            '70713' => 'SAN ONOFRE',
            '70820' => 'SANTIAGO DE TOLÚ',
            '70823' => 'TOLÚ VIEJO',
            '70110' => 'BUENAVISTA',
            '70215' => 'COROZAL',
            '70233' => 'EL ROBLE',
            '70235' => 'GALERAS',
            '70418' => 'LOS PALMITOS',
            '70670' => 'SAMPUÉS',
            '70702' => 'SAN JUAN BETULIA',
            '70717' => 'SAN PEDRO',
            '70742' => 'SINCÉ',
            '70124' => 'CAIMITO',
            '70400' => 'LA UNIÓN',
            '70678' => 'SAN BENITO ABAD',
            '70708' => 'SAN MARCOS',
        ];

        foreach ($cities as $code => $name) {
            City::create([
                'province_id' => $sucre->id,
                'code' => $code,
                'name' => $name,
            ]);
        }
    }
}
