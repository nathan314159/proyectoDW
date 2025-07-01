<?php

namespace App\Controllers\deberes;

use App\Controllers\BaseController;

class Semana_8Controller extends BaseController
{

    public function index()
    {
        echo view("adminPagina/catalogo/header");
        echo view('deberes/semana_8/index');
        echo view("adminPagina/catalogo/footer");
    }

    public function tablaDeMultiplicar()
    {
        echo view("adminPagina/catalogo/header");
        echo view('deberes/semana_8/tablaMultiplicar');
        echo view("adminPagina/catalogo/footer");
    }

    public function potencias()
    {
        echo view("adminPagina/catalogo/header");
        echo view('deberes/semana_8/potencias');
        echo view("adminPagina/catalogo/footer");
    }
}
