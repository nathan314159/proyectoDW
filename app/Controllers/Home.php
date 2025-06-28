<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('proyectosPersonales/juego');
    }

    public function hello()
    {
        return view("proyectosPersonales/index");
    }

    public function claseS9()
    {
        return view("proyectosPersonales/vista1");
    }

    public function catalogo()
    {
        echo view("trabajoEnClase/semana_9/catalogo/header");
        echo view("trabajoEnClase/semana_9/catalogo/body");
        echo view("trabajoEnClase/semana_9/catalogo/footer");
    }

    public function suma()
    {
        $vnum1 = $this->request->getPost("num1");
        $vnum2 = $this->request->getPost("num2");
        var_dump($vnum1, $vnum2);
        $resultado = $vnum1 + $vnum2;
        $data = [
            "numero1" => $vnum1,
            "numero2" => $vnum2,
            "res" => $resultado
        ];

        echo view('trabajoEnClase/semana_9/ejemplo1/sumaRespuesta', $data);
    }
}
