<?php

namespace Database\Factories;
use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory //CursoFactory se extiende de una clase mayor (Factory) por lo que podemos hacer uso de sus metodos
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Curso::class;

    public function definition(): array
    {
        return [
            //Declaro las columnas de mi tabla que quiero llenar
            'name'=> $this->faker->sentence(),
            'description'=> $this->faker->paragraph(),
            'categoria'=> $this->faker->randomElement(['Desarrollo Web', 'Diseño Web'])
        ];
    }
}
