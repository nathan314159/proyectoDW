<?php

namespace App\Models\proyectosDeSoftware;

use CodeIgniter\Model;

class User extends Model
{
    protected $table = 'tbl_user';
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['nombre', 'clave'];



}
