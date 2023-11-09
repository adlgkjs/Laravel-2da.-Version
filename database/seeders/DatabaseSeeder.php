<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Curso;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(50)->create(); //En el modelo user voy a ejecutar la factori ingresando 50 datos
        Curso::factory(50)->create(); //Las factories estan en database\factories

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //call es un metodo de la clase Seeder
        //$this->call(CursoSeeder::class); //Entre parentesis pongo la clase que llamara, en este caso es donde tengo mis registros, hago esto para no poner mi registros en este archivo y se crezca demasiado
        
    }
}
