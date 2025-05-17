<?php

namespace Database\Seeders\Cities;

use App\Models\City;
use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BolivarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bolivar = Province::create([
            "abbr" => "BOL",
            "code" => "13",
            "name" => "BOLÍVAR"
        ]);

        $cities = [
            '13188' => 'CICUCO',
            '13300' => 'HATILLO DE LOBA',
            '13440' => 'MARGARITA',
            '13468' => 'MOMPÓS',
            '13650' => 'SAN FERNANDO',
            '13780' => 'TALAIGUA NUEVO',
            '13052' => 'ARJONA',
            '13062' => 'ARROYOHONDO',
            '13140' => 'CALAMAR',
            '13001' => 'CARTAGENA',
            '13222' => 'CLEMENCIA',
            '13433' => 'MAHATES',
            '13620' => 'SAN CRISTÓBAL',
            '13647' => 'SAN ESTANISLAO',
            '13673' => 'SANTA CATALINA',
            '13683' => 'SANTA ROSA DE LIMA',
            '13760' => 'SOPLAVIENTO',
            '13836' => 'TURBACO',
            '13838' => 'TURBANA',
            '13873' => 'VILLANUEVA',
            '13030' => 'ALTOS DEL ROSARIO',
            '13074' => 'BARRANCO DE LOBA',
            '13268' => 'EL PEÑÓN',
            '13580' => 'REGIDOR',
            '13600' => 'RÍO VIEJO',
            '13667' => 'SAN MARTÍN DE LOBA',
            '13042' => 'ARENAL',
            '13160' => 'CANTAGALLO',
            '13473' => 'MORALES',
            '13670' => 'SAN PABLO',
            '13688' => 'SANTA ROSA DEL SUR',
            '13744' => 'SIMITÍ',
            '13006' => 'ACHÍ',
            '13430' => 'MAGANGUÉ',
            '13458' => 'MONTECRISTO',
            '13549' => 'PINILLOS',
            '13655' => 'SAN JACINTO DEL CAUCA',
            '13810' => 'TIQUISIO',
            '13244' => 'CARMEN DE BOLÍVAR',
            '13212' => 'CÓRDOBA',
            '13248' => 'EL GUAMO',
            '13442' => 'MARÍA LA BAJA',
            '13654' => 'SAN JACINTO',
            '13657' => 'SAN JUAN NEPOMUCENO',
            '13894' => 'ZAMBRANO',
        ];

        foreach ($cities as $code => $name) {
            City::create([
                'province_id' => $bolivar->id,
                'code' => $code,
                'name' => $name,
            ]);
        }
    }
}
