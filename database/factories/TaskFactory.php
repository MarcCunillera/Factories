<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "titulo"=> $this->faker->sentence(3), // Minim dos paraules 
            "descripcion"=> $this->faker->paragraph(rand(2,3)), // Minim 2 Maxim 3 linies 
            "completed"=> $this->faker->boolean(),
        ];
    }
}
