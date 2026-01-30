<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create(attributes: [
            "titulo" => "adeu",
            "descripcion" => "prueba 2",
            "completed" => true,
        ]);

        Task::create(attributes: [
            "titulo" => "Hola",
            "descripcion" => "prueba 5",
            "completed" => false,
        ]);
    }
}
