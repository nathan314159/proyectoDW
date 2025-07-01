<?php

namespace App\Controllers\deberes\semana9;

use App\Controllers\BaseController;

class ControladorVestido extends BaseController
{

    public function vestidoFormal()
    {
        // ruta: C:\xampp\htdocs\proyectoDW\app\Views\deberes\semana_9\application\views\ContenedorVestidos\Fiesta.php

        echo view("adminPagina/catalogo/header"); // header
        echo view('deberes/semana_9/application/views/ContenedorVestidos/Formal'); //ruta body
        echo view("adminPagina/catalogo/footer"); // footer
    }

    public function vestidoDeFiesta()
    {
        echo view("adminPagina/catalogo/header"); // header
        echo view('deberes/semana_9/application/views/ContenedorVestidos/Fiesta'); //ruta body
        echo view("adminPagina/catalogo/footer"); // footer
    }

}
