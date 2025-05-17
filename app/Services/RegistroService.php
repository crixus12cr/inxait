<?php

namespace App\Services;

use App\Repositories\RegistroRepository;

class RegistroService
{
    protected $registroRepository;

    public function __construct(
        RegistroRepository $registroRepository
    ) {
        $this->registroRepository = $registroRepository;
    }

    public function register(array $data)
    {
        return $this->registroRepository->create($data);
    }
}
