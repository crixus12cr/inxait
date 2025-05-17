<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Admin',
            'last_name' => 'Admin',
            'phone' => '1234567890',
            'email' => "admin@admin.com",
            'password' => Hash::make('administrador'),
            'document_number' => '123456789',
            'type_identification_id' => 1,
        ]);

        $user->rols()->attach(1);
    }
}
