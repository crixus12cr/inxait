<?php

namespace Database\Seeders\Cities;

use App\Models\City;
use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SantanderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $santander = Province::create([
            "abbr" => "SAN",
            "code" => "68",
            "name" => "SANTANDER",
        ]);

        $cities = [
            '68176' => 'CHIMA',
            '68209' => 'CONFINES',
            '68211' => 'CONTRATACIÓN',
            '68245' => 'EL GUACAMAYO',
            '68296' => 'GALÁN',
            '68298' => 'GAMBITA',
            '68320' => 'GUADALUPE',
            '68322' => 'GUAPOTÁ',
            '68344' => 'HATO',
            '68500' => 'OIBA',
            '68522' => 'PALMAR',
            '68524' => 'PALMAS DEL SOCORRO',
            '68720' => 'SANTA HELENA DEL OPÓN',
            '68745' => 'SIMACOTA',
            '68755' => 'SOCORRO',
            '68770' => 'SUAITA',
            '68147' => 'CAPITANEJO',
            '68152' => 'CARCASÍ',
            '68160' => 'CEPITÁ',
            '68162' => 'CERRITO',
            '68207' => 'CONCEPCIÓN',
            '68266' => 'ENCISO',
            '68318' => 'GUACA',
            '68425' => 'MACARAVITA',
            '68432' => 'MÁLAGA',
            '68468' => 'MOLAGAVITA',
            '68669' => 'SAN ANDRÉS',
            '68684' => 'SAN JOSÉ DE MIRANDA',
            '68686' => 'SAN MIGUEL',
            '68051' => 'ARATOCA',
            '68079' => 'BARICHARA',
            '68121' => 'CABRERA',
            '68167' => 'CHARALÁ',
            '68217' => 'COROMORO',
            '68229' => 'CURITÍ',
            '68264' => 'ENCINO',
            '68370' => 'JORDÁN',
            '68464' => 'MOGOTES',
            '68498' => 'OCAMONTE',
            '68502' => 'ONZAGA',
            '68533' => 'PÁRAMO',
            '68549' => 'PINCHOTE',
            '68679' => 'SAN GIL',
            '68682' => 'SAN JOAQUÍN',
            '68855' => 'VALLE DE SAN JOSÉ',
            '68872' => 'VILLANUEVA',
            '68081' => 'BARRANCABERMEJA',
            '68092' => 'BETULIA',
            '68235' => 'EL CARMEN DE CHUCURÍ',
            '68575' => 'PUERTO WILCHES',
            '68655' => 'SABANA DE TORRES',
            '68689' => 'SAN VICENTE DE CHUCURÍ',
            '68895' => 'ZAPATOCA',
            '68001' => 'BUCARAMANGA',
            '68132' => 'CALIFORNIA',
            '68169' => 'CHARTA',
            '68255' => 'EL PLAYÓN',
            '68276' => 'FLORIDABLANCA',
            '68307' => 'GIRÓN',
            '68406' => 'LEBRÍJA',
            '68418' => 'LOS SANTOS',
            '68444' => 'MATANZA',
            '68547' => 'PIEDECUESTA',
            '68615' => 'RIONEGRO',
            '68705' => 'SANTA BÁRBARA',
            '68780' => 'SURATA',
            '68820' => 'TONA',
            '68867' => 'VETAS',
            '68013' => 'AGUADA',
            '68020' => 'ALBANIA',
            '68077' => 'BARBOSA',
            '68101' => 'BOLÍVAR',
            '68179' => 'CHIPATÁ',
            '68190' => 'CIMITARRA',
            '68250' => 'EL PEÑÓN',
            '68271' => 'FLORIÁN',
            '68324' => 'GUAVATÁ',
            '68327' => 'GÜEPSA',
            '68368' => 'JESÚS MARÍA',
            '68377' => 'LA BELLEZA',
            '68397' => 'LA PAZ',
            '68385' => 'LANDÁZURI',
            '68572' => 'PUENTE NACIONAL',
            '68573' => 'PUERTO PARRA',
            '68673' => 'SAN BENITO',
            '68773' => 'SUCRE',
            '68861' => 'VÉLEZ',
        ];

        foreach ($cities as $code => $name) {
            City::create([
                'province_id' => $santander->id,
                'code' => $code,
                'name' => $name,
            ]);
        }
    }
}
