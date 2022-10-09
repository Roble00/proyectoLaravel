<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Receta;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //SE USA PARA HACER TANTOS INSERT COMO QUIERAS EN LAS TABLAS

        //Receta::factory(50)->create();//llamada directa al factory, crea 50 recetas
        //User::factory(10)->create();//uso el UserFactory.php para crear 10 User
    }
}
