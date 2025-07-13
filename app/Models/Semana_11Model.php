<?php

namespace App\Models;

use CodeIgniter\Model;

class Semana_11Model extends Model
{
    public function mostrarUsuario()
    {
        $variable = $this->db->query('CALL SP_SELECT_USUARIOS()');
        return $variable->getResultArray();
    }

        public function mostrarNovias()
    {
        $variable = $this->db->query('CALL SP_SELECT_NOVIAS()');
        return $variable->getResultArray();
    }
}
