<?php

namespace Database\Seeders\Cities;

use App\Models\City;
use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CundinamarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cundinamarca = Province::create([
            "abbr" => "CUN",
            "code" => "25",
            "name" => "CUNDINAMARCA",
        ]);

        $cities = [
            "25183" => "CHOCONTÁ",
            "25426" => "MACHETA",
            "25436" => "MANTA",
            "25736" => "SESQUILÉ",
            "25772" => "SUESCA",
            "25807" => "TIBIRITA",
            "25873" => "VILLAPINZÓN",
            "25001" => "AGUA DE DIOS",
            "25307" => "GIRARDOT",
            "25324" => "GUATAQUÍ",
            "25368" => "JERUSALÉN",
            "25483" => "NARIÑO",
            "25488" => "NILO",
            "25612" => "RICAURTE",
            "25815" => "TOCAIMA",
            "25148" => "CAPARRAPÍ",
            "25320" => "GUADUAS",
            "25572" => "PUERTO SALGAR",
            "25019" => "ALBÁN",
            "25398" => "LA PEÑA",
            "25402" => "LA VEGA",
            "25489" => "NIMAIMA",
            "25491" => "NOCAIMA",
            "25592" => "QUEBRADANEGRA",
            "25658" => "SAN FRANCISCO",
            "25718" => "SASAIMA",
            "25777" => "SUPATÁ",
            "25851" => "ÚTICA",
            "25862" => "VERGARA",
            "25875" => "VILLETA",
            "25293" => "GACHALÁ",
            "25297" => "GACHETÁ",
            "25299" => "GAMA",
            "25322" => "GUASCA",
            "25326" => "GUATAVITA",
            "25372" => "JUNÍN",
            "25377" => "LA CALERA",
            "25839" => "UBALÁ",
            "25086" => "BELTRÁN",
            "25095" => "BITUIMA",
            "25168" => "CHAGUANÍ",
            "25328" => "GUAYABAL DE SIQUIMÁ",
            "25580" => "PULI",
            "25662" => "SAN JUAN DE RÍO SECO",
            "25867" => "VIANÍ",
            "25438" => "MEDINA",
            "25530" => "PARATEBUENO",
            "25151" => "CAQUEZA",
            "25178" => "CHIPAQUE",
            "25181" => "CHOACHÍ",
            "25279" => "FOMEQUE",
            "25281" => "FOSCA",
            "25335" => "GUAYABETAL",
            "25339" => "GUTIÉRREZ",
            "25594" => "QUETAME",
            "25841" => "UBAQUE",
            "25845" => "UNE",
            "25258" => "EL PEÑÓN",
            "25394" => "LA PALMA",
            "25513" => "PACHO",
            "25518" => "PAIME",
            "25653" => "SAN CAYETANO",
            "25823" => "TOPAIPI",
            "25871" => "VILLAGOMEZ",
            "25885" => "YACOPÍ",
            "25126" => "CAJICÁ",
            "25175" => "CHÍA",
            "25200" => "COGUA",
            "25295" => "GACHANCIPÁ",
            "25486" => "NEMOCÓN",
            "25758" => "SOPÓ",
            "25785" => "TABIO",
            "25817" => "TOCANCIPÁ",
            "25899" => "ZIPAQUIRÁ",
            "25099" => "BOJACÁ",
            "25214" => "COTA",
            "25260" => "EL ROSAL",
            "25269" => "FACATATIVÁ",
            "25286" => "FUNZA",
            "25430" => "MADRID",
            "25473" => "MOSQUERA",
            "25769" => "SUBACHOQUE",
            "25799" => "TENJO",
            "25898" => "ZIPACÓN",
            "25740" => "SIBATÉ",
            "25754" => "SOACHA",
            "25053" => "ARBELÁEZ",
            "25120" => "CABRERA",
            "25290" => "FUSAGASUGÁ",
            "25312" => "GRANADA",
            "25524" => "PANDI",
            "25535" => "PASCA",
            "25649" => "SAN BERNARDO",
            "25743" => "SILVANIA",
            "25805" => "TIBACUY",
            "25506" => "VENECIA",
            "25035" => "ANAPOIMA",
            "25040" => "ANOLAIMA",
            "25599" => "APULO",
            "25123" => "CACHIPAY",
            "25245" => "EL COLEGIO",
            "25386" => "LA MESA",
            "25596" => "QUIPILE",
            "25645" => "SAN ANTONIO DE TEQUENDAMA",
            "25797" => "TENA",
            "25878" => "VIOTÁ",
            "25154" => "CARMEN DE CARUPA",
            "25224" => "CUCUNUBÁ",
            "25288" => "FÚQUENE",
            "25317" => "GUACHETÁ",
            "25407" => "LENGUAZAQUE",
            "25745" => "SIMIJACÁ",
            "25779" => "SUSA",
            "25781" => "SUTATAUSA",
            "25793" => "TAUSA",
            "25843" => "UBATE"
        ];


        foreach ($cities as $code => $name) {
            City::create([
                'province_id' => $cundinamarca->id,
                'code' => $code,
                'name' => $name,
            ]);
        }
    }
}
