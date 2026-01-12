<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table(table: "tasks")->insert(values: [
            [
                "titulo" => "adeu",
                "descripcion" => "prueba 2",
                "completed" => true
            ]
        ]);
    }
}
