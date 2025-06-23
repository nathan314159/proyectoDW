<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DeberSemana8 extends BaseController
{
    public function tablaDeMultiplicar()
    {
        return view('DeberSemana8/tablaMultiplicar');
    }

        public function potencias()
    {
        return view('DeberSemana8/potencias');
    }
}
