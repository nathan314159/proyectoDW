<?php

namespace App\Controllers\deberes;

use App\Controllers\BaseController;

class Semana_8Controller extends BaseController
{

    public function index()
    {
        echo view("trabajoEnClase/semana_9/catalogo/header");
        echo view('deberes/semana_8/index');
        echo view("trabajoEnClase/semana_9/catalogo/footer");
    }

    public function tablaDeMultiplicar()
    {
        echo view("trabajoEnClase/semana_9/catalogo/header");
        echo view('deberes/semana_8/tablaMultiplicar');
        echo view("trabajoEnClase/semana_9/catalogo/footer");
    }

    public function potencias()
    {

        echo view("trabajoEnClase/semana_9/catalogo/header");
        echo view('deberes/semana_8/potencias');
        echo view("trabajoEnClase/semana_9/catalogo/footer");
    }
}
