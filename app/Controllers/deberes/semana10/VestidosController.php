<?php

namespace App\Controllers\deberes\semana10;

use App\Controllers\BaseController;

class VestidosController extends BaseController
{
    public function verVestidos($id)
    {
        if ($id == 1) {
            echo view("adminPagina/catalogo/header"); // header
            echo view('deberes/semana_10/vestidos/V' . $id);
            echo view("adminPagina/catalogo/footer"); // footer
        } elseif ($id == 2) {
            echo view("adminPagina/catalogo/header"); // header
            echo view('deberes/semana_10/vestidos/V' . $id);
            echo view("adminPagina/catalogo/footer"); // footer
        } else {
            echo view("adminPagina/catalogo/header");
            echo "<h2 style='text-align:center;margin-top:40px;'>Producto no encontrado</h2>";
            echo view("adminPagina/catalogo/footer");
        }
    }
}
