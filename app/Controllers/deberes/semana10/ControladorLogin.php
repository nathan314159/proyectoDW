<?php

namespace App\Controllers\deberes\semana10;

use App\Controllers\BaseController;

class ControladorLogin extends BaseController
{

    public function index()
    {
        echo view("adminPagina/catalogo/header"); // header
        echo view('deberes/semana_10/index'); //ruta body
        echo view("adminPagina/catalogo/footer"); // footer
    }

    public function login()
    {
        $username = $this->request->getPost('userName');
        $password = $this->request->getPost('password');

        if ($username == "dw" & $password == "1234") {
            echo view("adminPagina/catalogo/header"); // header
            echo view('deberes/semana_10/bienvenida'); //ruta body
            echo view("adminPagina/catalogo/footer"); // footer
        } else {
            echo view("adminPagina/catalogo/header"); // header
            echo view('deberes/semana_10/error');
            echo view("adminPagina/catalogo/footer"); // footer
        }
    }
}
