<?php

namespace App\Controllers\deberes\semana9;

use App\Controllers\BaseController;

// la razon que cree este controlador es con el fin de mantener la armonia de la estructura que yo cree.
class ControladorIndex extends BaseController
{

    public function index()
    {
        // ruta: C:\xampp\htdocs\proyectoDW\app\Views\deberes\semana_9\application\views\index.php

        echo view("adminPagina/catalogo/header"); // header
        echo view('deberes/semana_9/application/views/index'); //ruta body
        echo view("adminPagina/catalogo/footer"); // footer
    }


}
