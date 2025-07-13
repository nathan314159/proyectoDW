<?php

namespace App\Controllers\proyectosPersonales\formularios;

use App\Controllers\BaseController;
use App\Models\formularios\EmpleadoModel;

class EmpleadoController extends BaseController
{
    public function index()
    {
       $model = new EmpleadoModel();
        $empleados = $model->findAll();
        return view('proyectosPersonales/formularios/empleado', ['empleados' => $empleados]);

    }

public function insertarEmpleado()
{
    if ($this->request->isAJAX()) {
        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'apellido' => $this->request->getPost('apellido'),
            'telf' => $this->request->getPost('telefono')
        ];

        $model = new EmpleadoModel();
        $inserted = $model->insert($data);

        if($inserted) {
            $empleados = $model->findAll();

            return $this->response->setJSON([
                'success' => true,
                'empleado' => $data,
                'empleados' => $empleados
            ]);
        } else {
            return $this->response->setJSON(['success' => false]);
        }
    }
    
    // fallback for non-AJAX (normal submit)
    return redirect()->to(base_url('proyectos/empleado'));
}



}
