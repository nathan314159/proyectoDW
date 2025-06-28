<?php

namespace App\Controllers\deberes;

use App\Controllers\BaseController;

class Semana_8Controller extends BaseController
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
