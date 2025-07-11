<?php

namespace App\Controllers\trabajoEnClase;

use App\Controllers\BaseController;
use App\Models\Semana_11Model;

class Semana_11Controller extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();

        if ($db->connect()) {
            echo 'Conexión Correcta';
        } else {
            echo 'Conexión Fallida';
        }
    }

        public function mostrarUsuarios()
    {
        $objetoInstancia = new Semana_11Model();
        $datos = $objetoInstancia->mostrarUsuario();
        $datos1 = $objetoInstancia->mostrarNovias();
        $datosEnviados = [
            "datosVista" => $datos,
            "datos" => $datos1,
        ];

        print_r($datos);
        return view("trabajoEnClase/semana_11/vistaSelect", $datosEnviados );
    }

            public function mostrarNovias()
    {
        $objetoInstancia = new Semana_11Model();
        $datos = $objetoInstancia->mostrarNovias();
        $datosEnviados = [
            "datosVista" => $datos,
        ];
        print_r($datos);
        return view("trabajoEnClase/semana_11/vistaNovias", $datosEnviados );
    }
}
