<?php

namespace App\Repositories;

use App\Models\City;
use App\Models\Province;
use App\Models\TypeIdentification;
use App\Models\User;

class AdministracionRepository
{
    public function departamentos()
    {
        return Province::all();
    }

    public function tipoIdentificacion()
    {
        return TypeIdentification::all();
    }

    public function getCiudadesByProvinceId($province_id)
    {
        return City::where('province_id', $province_id)
            ->orderBy('name', 'asc')
            ->get(['id', 'name']);
    }

    public function obtenerGanador()
    {
        return User::where('winner', true)->first();
    }

    public function marcarGanadorAleatorio()
    {
        $usuarios = User::whereHas('rols', function ($query) {
            $query->where('rols.id', 2);
        })->get();

        if ($usuarios->count() >= 5) {
            $ganador = $this->obtenerGanador();

            if (!$ganador) {
                $ganador = $usuarios->random();
                $ganador->winner = true;
                $ganador->save();
            }

            return $ganador;
        }

        return null;
    }
}
