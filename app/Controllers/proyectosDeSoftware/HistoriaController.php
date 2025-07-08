<?php

namespace App\Controllers\proyectosDeSoftware;

use App\Controllers\BaseController;
use App\Models\proyectosDeSoftware\GeneraAleatorio;

class HistoriaController extends BaseController
{
    public function mostrarNombre()
    {
        $model = new GeneraAleatorio();

        // Traer un nombre aleatorio de la base de datos
        $aleatorio = $model->orderBy('RAND()')->first();
        // echo '<pre>';
        // print_r($aleatorio);
        // echo '</pre>';

        // // Stop execution so you can see the output clearly
        // exit;
        return view('proyectosDeSoftware/generaAleatorio', ['nombre' => $aleatorio]);
    }

    public function login(){
        
        echo view("proyectosDeSoftware/login");
    }
}
