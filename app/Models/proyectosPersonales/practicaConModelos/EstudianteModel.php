<?php

namespace App\Models\proyectosPersonales\practicaConModelos;

use CodeIgniter\Model;

class EstudianteModel extends Model
{
    protected $DBGroup = 'ajaxEjemplo';
    protected $table = 'tbl_estudiante';
    protected $primaryKey = 'id_estudiante';

    protected $allowedFields = [
        'estudiante_nombre',
        'estudiante_apellido',
        'estudiante_cedula',
        'estudiante_telf'
    ];

    // insertar un estudiantes 
    public function insertarEstudiante($data)
    {
        return $this->insert($data);
    }

    // mostrar estudiantes
    public function mostrarEstudiantes()
    {
        return $this->findAll();
    }

    public function eliminarEstudiante($id)
    {
        return $this->delete($id);
    }
}
