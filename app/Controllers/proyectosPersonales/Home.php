<?php

namespace App\Controllers\proyectosPersonales;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        echo view("trabajoEnClase/semana_9/catalogo/header");
        echo view('proyectosPersonales/paginaPincipal');
        echo view("trabajoEnClase/semana_9/catalogo/footer");
    }
}
