<?php

namespace Database\Seeders\Cities;

use App\Models\City;
use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NarinoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $narino = Province::create([
            "abbr" => "NAR",
            "code" => "52",
            "name" => "NARIÑO",
        ]);

        $cities = [
            '52240' => 'CHACHAGUI',
            '52207' => 'CONSACA',
            '52254' => 'EL PEÑOL',
            '52260' => 'EL TAMBO',
            '52381' => 'LA FLORIDA',
            '52480' => 'NARIÑO',
            '52001' => 'PASTO',
            '52683' => 'SANDONÁ',
            '52788' => 'TANGUA',
            '52885' => 'YACUANQUER',
            '52036' => 'ANCUYA',
            '52320' => 'GUAITARILLA',
            '52385' => 'LA LLANADA',
            '52411' => 'LINARES',
            '52418' => 'LOS ANDES',
            '52435' => 'MALLAMA',
            '52506' => 'OSPINA',
            '52565' => 'PROVIDENCIA',
            '52612' => 'RICAURTE',
            '52678' => 'SAMANIEGO',
            '52699' => 'SANTA CRUZ',
            '52720' => 'SAPUYES',
            '52838' => 'TUQUERRES',
            '52079' => 'BARBACOAS',
            '52250' => 'EL CHARCO',
            '52520' => 'FRANCISCO PIZARRO',
            '52390' => 'LA TOLA',
            '52427' => 'Magui',
            '52473' => 'MOSQUERA',
            '52490' => 'OLAYA HERRERA',
            '52621' => 'ROBERTO PAYAN',
            '52696' => 'SANTA BaRBARA',
            '52835' => 'TUMACO',
            '52019' => 'ALBAN',
            '52051' => 'ARBOLEDA',
            '52083' => 'BELEN',
            '52110' => 'BUESACO',
            '52203' => 'COLON',
            '52233' => 'CUMBITARA',
            '52256' => 'EL ROSARIO',
            '52258' => 'El Tablon de Gomez',
            '52378' => 'LA CRUZ',
            '52399' => 'LA UNION',
            '52405' => 'LEIVA',
            '52540' => 'POLICARPA',
            '52685' => 'SAN BERNARDO',
            '52687' => 'SAN LORENZO',
            '52693' => 'SAN PABLO',
            '52694' => 'SAN PEDRO DE CARTAGO',
            '52786' => 'TAMINANGO',
            '52022' => 'ALDANA',
            '52210' => 'CONTADERO',
            '52215' => 'CÓRDOBA',
            '52224' => 'CUASPUD',
            '52227' => 'CUMBAL',
            '52287' => 'FUNES',
            '52317' => 'GUACHUCAL',
            '52323' => 'GUALMATAN',
            '52352' => 'ILES',
            '52354' => 'IMUES',
            '52356' => 'IPIALES',
            '52560' => 'POTOSÍ',
            '52573' => 'PUERRES',
            '52585' => 'PUPIALES',
        ];

        foreach ($cities as $code => $name) {
            City::create([
                'province_id' => $narino->id,
                'code' => $code,
                'name' => $name,
            ]);
        }
    }
}
