<?php

namespace App\Controllers\proyectosPersonales\practicaConModelos;

use App\Controllers\BaseController;
use App\Models\proyectosPersonales\practicaConModelos\EstudianteModel;

class EstudianteController extends BaseController
{
    protected $estudianteModel;
    public function __construct()
    {
        $this->estudianteModel = new EstudianteModel(db_connect('ajaxEjemplo'));
    }

    public function index()
    {
        $estudiantes = $this->estudianteModel->mostrarEstudiantes();

        return view('proyectosPersonales/formularios/estudiante', ['estudiantes'=> $estudiantes]);

        
    }

    public function insertarEstudiante()
    {
        $data = [
            'estudiante_nombre' => $this->request->getpost("nombre"),
            'estudiante_apellido' => $this->request->getpost("apellido"),
            'estudiante_cedula' => $this->request->getpost("cedula"),
            'estudiante_telf' => $this->request->getpost("telf")
        ];
        $this->estudianteModel->insertarEstudiante($data);
        return redirect()->to(current_url());
    }

    public function eliminarEstudiante($id){
        $this->estudianteModel->eliminarEstudiante($id);
        return redirect()->to(site_url('proyectos/practica/estudiante'));
    }
}
