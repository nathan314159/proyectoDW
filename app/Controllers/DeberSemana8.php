<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DeberSemana8 extends BaseController
{
    public function tablaDeMultiplicar()
    {
        return view('deberes/semana_8/tablaMultiplicar');
    }

        public function potencias()
    {
        return view('deberes/semana_8/potencias');
    }
}
