<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\clientes>
 */
class ClientesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'nombre' => fake()->name(),
            'dni' => fake()->unique()->randomNumber(),
            'provincia' => fake()->name(),
            'localidad' => fake()->name(),
            'direccion' => fake()->name(),
            'telefono' => fake()->unique()->randomNumber(),
            'correo' => fake()->unique()->safeEmail(),
            
        ];
    }
}
