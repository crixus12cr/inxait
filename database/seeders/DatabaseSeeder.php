<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            TypeIdentificationSeeder::class,
            RolSeeder::class,
            UserSeeder::class
        ]);

        // Cargar automáticamente todos los seeders de la carpeta 'cities'
        $this->seedCities();
    }

    private function seedCities(): void
    {
        // Obtiene todos los archivos .php en la carpeta cities
        $seeders = File::files(database_path('seeders/cities'));

        foreach ($seeders as $seeder) {
            // Forma el nombre de la clase del seeder
            $seederClass = 'Database\\Seeders\\Cities\\' . pathinfo($seeder->getFilename(), PATHINFO_FILENAME);
            if (class_exists($seederClass)) {
                $this->call($seederClass);
            }
        }
    }
}
