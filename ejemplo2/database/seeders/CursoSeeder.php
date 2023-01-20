<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curso = new Curso;
        $curso->name="Laravel";
        $curso->description = "El mejor framework de php";
        $curso->category="Curso";
        $curso->save();
    }
}
