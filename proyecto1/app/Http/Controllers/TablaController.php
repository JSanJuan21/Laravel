<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TablaController extends Controller
{
    public function __invoke()
    {
        return view("paginas.tabla");
    }
}
