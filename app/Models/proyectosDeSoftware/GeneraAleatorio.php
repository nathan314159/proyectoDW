<?php

namespace App\Models\proyectosDeSoftware;

use CodeIgniter\Model;

class GeneraAleatorio extends Model
{
    protected $table = 'tbl_historia';
    protected $primaryKey = 'id_historia';
    protected $allowedFields = ['nombre'];


}
