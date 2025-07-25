<?php

namespace App\Models;

use CodeIgniter\Model;

class Semana_13Model extends Model
{


    public function mostrarUsuario()
    {
        // Ejecutar el procedimiento almacenado
        $query = $this->db->query('CALL SP_SELECT_USUARIO()');

        // Retornar el resultado como un array asociativo
        return $query->getResultArray();
    }

    public function mostrarDepartamentos()
    {
        // Ejecutar el procedimiento almacenado
        $query = $this->db->query('CALL SP_SELECT_DEPARTAMENTO()');

        // Retornar el resultado como un array asociativo
        return $query->getResultArray();
    }

    public function mostrarCiudades()
    {
        // Ejecutar el procedimiento almacenado
        $query = $this->db->query('CALL SP_SELECT_CIUDAD()');

        // Retornar el resultado como un array asociativo
        return $query->getResultArray();
    }

    public function mostrarProvincias()
    {
        // Ejecutar el procedimiento almacenado
        $query = $this->db->query('CALL SP_SELECT_PROVINCIAS()');

        // Retornar el resultado como un array asociativo
        return $query->getResultArray();
    }

    public function mostrarEstados()
    {
        // Ejecutar el procedimiento almacenado
        $query = $this->db->query('CALL SP_SELECT_ESTADO()');

        // Retornar el resultado como un array asociativo
        return $query->getResultArray();
    }

    public function mostrarUsuarioPorId($id)
    {
        $query = $this->db->query('CALL SP_SELECT_USUARIO_ID(?)', [$id]);
        return $query->getResultArray();
    }
}
