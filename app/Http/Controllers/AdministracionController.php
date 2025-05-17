<?php

namespace App\Http\Controllers;

use App\Services\AdministracionService;

class AdministracionController extends Controller
{
    protected $administracionService;

    public function __construct(AdministracionService $administracionService)
    {
        $this->administracionService = $administracionService;
    }

    public function index()
    {
        $departamentos = $this->administracionService->departamentos();
        $identificaciones = $this->administracionService->tipoIdentificacion();
        $ganador = $this->administracionService->verificarOGenerarGanador();

        return view('home', compact('identificaciones', 'departamentos', 'ganador'));
    }

    public function getCiudadesPorDepartamento($province_id)
    {
        $ciudades = $this->administracionService->obtenerCiudadesPorDepartamento($province_id);
        return response()->json($ciudades);
    }
}

