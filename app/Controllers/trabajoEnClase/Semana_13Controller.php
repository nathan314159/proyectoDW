<?php

namespace App\Controllers\trabajoEnClase;

use App\Controllers\BaseController;
use App\Models\Semana_13Model;

class Semana_13Controller extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();

        if ($db->connect()) {
            echo 'Conexión Correcta';
        } else {
            echo 'Conexión Fallida';
        }
    }

    public function mostrarUsuarios()
    {
        $objetoInstancia = new Semana_13Model();
        $datos = $objetoInstancia->mostrarUsuario();

        $datosEnviados = [
            "usuarios" => $datos,
        ];

        //dd($datos);
        return view("trabajoEnClase/semana_13/index", $datosEnviados);
    }

    public function editar($id1,$id2, $id3, $id4, $id5)
    {
        $model = new Semana_13Model();

        // Obtener usuario por ID - debes crear este método en el modelo
        $usuario = $model->mostrarUsuarioPorId($id1);

        if (!$usuario) {
            // Si no encuentra el usuario, redirigir o mostrar error
            return redirect()->to('/trabajoEnClase/semana_13/mostrarUsuarios')
                ->with('error', 'Usuario no encontrado');
        }

        // Obtener listas para select
        $departamentos = $model->mostrarDepartamentos();
        $ciudades = $model->mostrarCiudades();
        $provincias = $model->mostrarProvincias();
        $estados = $model->mostrarEstados();

        // Preparar datos para la vista
        $data = [
            'usuario' => $usuario[0], // Como es resultado array, tomo el primer elemento
            'departamentos' => $departamentos,
            'ciudades' => $ciudades,
            'provincias' => $provincias,
            'estados' => $estados,
            "id2" => $id2,
            "id3" => $id3,
            "id4" => $id4,
            "id5" => $id5,

        ];
        //dd($data);
        return view('trabajoEnClase/semana_13/editar', $data);
    }

    public function guardar(){
        $var1 = $this->request->getPost('nombre');
        
    }

}
