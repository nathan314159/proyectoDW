<?php

namespace App\Controllers\trabajoEnClase;

use App\Controllers\BaseController;

class Semana_10Controller extends BaseController
{

    

public function index(): string
{
    return view('trabajoEnClase/semana_10/VistaCss/index');

}

public function card(): string
{
    return view('trabajoEnClase/semana_10/VistaCss/card');
}

public function triangulo(): string
{
    return view('trabajoEnClase/semana_10/VistaCss/triangulo');
}

}
