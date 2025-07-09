<?php

namespace App\Controllers\proyectosPersonales\practicaConModelos;

use App\Controllers\BaseController;
use App\Models\proyectosPersonales\practicaConModelos\EmpleadoModel;

class EmpleadoController extends BaseController
{

    public function index()
    {
        return view('proyectosPersonales/formularios/empleado2'); // empatar con formulario
    }

    public function insertar()
    // crear el insert
    // declarar la base de datos
    {
        $db = \config\database::connect("ajaxEjemplo");
        $model = new EmpleadoModel($db);

        $data = [
            'nombre' => $this->request->getpost('nombre'),
            'apellido' => $this->request->getpost('apellido'),
            'telf' => $this->request->getpost('telefono')
        ];
        
        $model->insert($data);
    }
}
