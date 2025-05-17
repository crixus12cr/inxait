<?php

namespace App\Services;

use App\Repositories\AdministracionRepository;

class AdministracionService
{
    protected $administracionRepository;

    public function __construct(AdministracionRepository $administracionRepository)
    {
        $this->administracionRepository = $administracionRepository;
    }

    public function departamentos()
    {
        return $this->administracionRepository->departamentos();
    }

    public function tipoIdentificacion()
    {
        return $this->administracionRepository->tipoIdentificacion();
    }

    public function obtenerCiudadesPorDepartamento($province_id)
    {
        return $this->administracionRepository->getCiudadesByProvinceId($province_id);
    }

    public function verificarOGenerarGanador()
    {
        return $this->administracionRepository->marcarGanadorAleatorio();
    }

}

