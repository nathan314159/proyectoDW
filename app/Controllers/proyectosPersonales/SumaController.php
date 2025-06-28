<?php

namespace App\Controllers\proyectosPersonales;

use App\Controllers\BaseController;

class SumaController extends BaseController
{
    public function funcSumar()
    {
        return view('trabajoEnclase/semana_9/ejemplo1/suma');
    }

    public function funcRespuesta()
    {
        $varNum1 = $this->request->getPost('num1');
        $varNum2 = $this->request->getPost('num2');
        $respuesta = $varNum1 + $varNum2;

        $data = [
            "numero1" => $varNum1,
            "numero2" => $varNum2,
            "res" => $respuesta
        ];

        return view('trabajoEnclase/semana_9/ejemplo1/sumaRespuesta', $data);
    }
}
