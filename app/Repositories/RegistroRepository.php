<?php

namespace App\Repositories;

use App\Models\User;

class RegistroRepository
{
    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'last_name' => $data['last_name'],
            'type_identification_id' => $data['type_identification_id'],
            'document_number' => $data['document_number'],
            'city_id' => $data['city_id'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'habeas' => $data['habeas_data'] ?? false,
        ]);
    }
}

