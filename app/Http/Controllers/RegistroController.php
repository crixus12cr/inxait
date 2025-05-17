<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistroRequest;
use App\Services\RegistroService;
use Illuminate\Support\Facades\Log;
use Exception;

class RegistroController extends Controller
{
    protected $registroService;

    public function __construct(
        RegistroService $registroService
    ){
        $this->registroService = $registroService;
    }

    public function store(RegistroRequest $request)
    {
        try {
            $data = $request->validated();

            $this->registroService->register($data);

            return redirect()->back()->with('success', 'Registro realizado correctamente.');
        } catch (Exception $e) {
            Log::error('Error en el registro: ' . $e->getMessage());
            return redirect()->back()->withErrors('Ocurrió un error al realizar el registro. Inténtalo nuevamente.');
        }
    }
}
