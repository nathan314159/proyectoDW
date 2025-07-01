<?php

namespace App\Controllers\deberes\semana9;

use App\Controllers\BaseController;

class ControladorCartera extends BaseController
{

    public function carteraDeHombro()
    {
        // ruta: deberes/semana_9/application/views/ContenedorCarteras

        echo view("adminPagina/catalogo/header"); // header
        echo view('deberes/semana_9/application/views/ContenedorCarteras/Hombro'); //ruta body
        echo view("adminPagina/catalogo/footer"); // footer
    }

    public function carteraDeMano()
    {
        echo view("adminPagina/catalogo/header"); // header
        echo view('deberes/semana_9/application/views/ContenedorCarteras/Mano'); //ruta body
        echo view("adminPagina/catalogo/footer"); // footer
    }

}
