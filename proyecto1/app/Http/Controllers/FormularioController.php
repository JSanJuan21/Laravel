<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function __invoke()
    {
        return view("paginas.formulario");
    }
}
