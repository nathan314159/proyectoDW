<?php

namespace App\Controllers\deberes\semana9;

use App\Controllers\BaseController;

class ControladorZapatos extends BaseController
{

    public function ZapatosCasual()
    {
        // ruta: C:\xampp\htdocs\proyectoDW\app\Views\deberes\semana_9\application\views\ContenedorZapatos\Casual.php

        echo view("adminPagina/catalogo/header"); // header
        echo view('deberes/semana_9/application/views/ContenedorZapatos/Casual'); //ruta body
        echo view("adminPagina/catalogo/footer"); // footer
    }

    public function ZapatosDeportivos()
    {
        echo view("adminPagina/catalogo/header"); // header
        echo view('deberes/semana_9/application/views/ContenedorZapatos/Deportivos'); //ruta body
        echo view("adminPagina/catalogo/footer"); // footer
    }

}
