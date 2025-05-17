<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class DashboardController extends Controller
{
    protected $service;

    public function __construct(UserService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $users = $this->service->getUsers();

        return view('dashboard', compact('users'));
    }

    public function export()
    {
        $nombre = 'usuarios_'.now()->format('Y-m-d_H-i-s').'.xlsx';
        return Excel::download(new UsersExport, $nombre);
    }
}

