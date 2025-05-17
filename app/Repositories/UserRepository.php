<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    public function getUsers()
    {
        return User::whereHas('rols', function ($query) {
                $query->where('rols.id', 2);
            })
            ->paginate(10);
    }
}
