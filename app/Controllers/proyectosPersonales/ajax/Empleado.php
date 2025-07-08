<?php

namespace App\Controllers\proyectosPersonales\ajax;

use App\Models\proyectosPersonales\ajax\EmpleadoModel;
use App\Controllers\BaseController;

class Empleado extends BaseController
{

    public function index()
    {
        echo view("adminPagina/catalogo/header");
        echo view("proyectosPersonales/formularios/empleado");
        echo view("adminPagina/catalogo/footer");
    }

    public function insertar()
    {
        $db = \Config\Database::connect('ajaxEjemplo');
        $model = new EmpleadoModel($db);

        $data = [
            'nombre'   => $this->request->getPost('nombre'),
            'apellido' => $this->request->getPost('apellido'),
            'telf'     => $this->request->getPost('telefono')
        ];

        $model->insert($data);
        // return $this->response->setJSON(['status' => 'ok', 'mensaje' => 'Empleado insertado']);
    }
}
