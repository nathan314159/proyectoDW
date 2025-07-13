<?php

namespace App\Models\formularios;

use CodeIgniter\Model;

class EmpleadoModel extends Model
{
    protected $table = 'tbl_empleado';
    protected $allowedFields = ['nombre', 'apellido', 'telf'];

}
