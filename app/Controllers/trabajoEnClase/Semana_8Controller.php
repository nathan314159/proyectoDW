<?php

namespace App\Controllers\trabajoEnClase;
use App\Controllers\BaseController;

class Semana_8Controller extends BaseController
{
    public function index(): string
    {
        return view('proyectosPersonales/juego');
    }

    public function hello()
    {
        return view("proyectosPersonales/index");
    }

}
