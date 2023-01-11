<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return "<h1>Bienvenido a la página principal de cursos</h1>";
    }

    public function create(){
        return "<h1>Bienvenido a la página para crear cursos</h1>";
    }

    public function show($curso){
        return "<h1>Bienvenido al curso de $curso</h1>";
    
    }
}
