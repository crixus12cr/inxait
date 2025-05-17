<?php

namespace Database\Seeders\Cities;

use App\Models\City;
use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MagdalenaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $magdalena = Province::create([
            "abbr" => "MAG",
            "code" => "47",
            "name" => "MAGDALENA",
        ]);

        $cities = [
            '47058' => 'ARIGUANÍ',
            '47170' => 'CHIBOLO',
            '47460' => 'NUEVA GRANADA',
            '47555' => 'PLATO',
            '47660' => 'SABANAS DE SAN ANGEL',
            '47798' => 'TENERIFE',
            '47030' => 'ALGARROBO',
            '47053' => 'ARACATACA',
            '47189' => 'CIÉNAGA',
            '47268' => 'EL RETEN',
            '47288' => 'FUNDACION',
            '47570' => 'PUEBLO VIEJO',
            '47980' => 'ZONA BANANERA',
            '47161' => 'CERRO SAN ANTONIO',
            '47205' => 'CONCORDIA',
            '47258' => 'EL PIÑON',
            '47541' => 'PEDRAZA',
            '47551' => 'PIVIJAY',
            '47605' => 'REMOLINO',
            '47675' => 'SALAMINA',
            '47745' => 'SITIONUEVO',
            '47960' => 'ZAPAYAN',
            '47001' => 'SANTA MARTA',
            '47245' => 'EL BANCO',
            '47318' => 'GUAMAL',
            '47545' => 'PIJIÑO DEL CARMEN',
            '47692' => 'SAN SEBASTIAN DE BUENAVISTA',
            '47703' => 'SAN ZENON',
            '47707' => 'SANTA ANA',
            '47720' => 'SANTA BARBARA DE PINTO',
        ];

        foreach ($cities as $code => $name) {
            City::create([
                'province_id' => $magdalena->id,
                'code' => $code,
                'name' => $name,
            ]);
        }
    }
}
