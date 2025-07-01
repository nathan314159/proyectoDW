<?php

namespace App\Controllers\adminPagina;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        echo view("adminPagina/catalogo/header");
        echo view('adminPagina/paginaPincipal');
        echo view("adminPagina/catalogo/footer");
    }
}
