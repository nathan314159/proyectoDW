<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function hello()
    {
        return view("index");
    }

    public function claseS9()
    {
        return view("clase_semana_9/vista1");
    }

    public function catalogo()
    {
        echo view("catalogo/header");
        echo view("catalogo/body");
        echo view("catalogo/footer");
    }
}
