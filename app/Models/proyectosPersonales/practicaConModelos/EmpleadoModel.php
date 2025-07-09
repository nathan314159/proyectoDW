<?php

namespace App\Models\proyectosPersonales\practicaConModelos;

use CodeIgniter\Model;

class EmpleadoModel extends Model
{
    protected $DBGroup = 'ajaxEjemplo';
    protected $table = 'tbl_empleado';
    protected $primaryKey = 'id_Empleado';
    protected $allowedFields = ['nombre', 'apellido', 'telf'];
}
