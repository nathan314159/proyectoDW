<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */



//** Puedes agrupar tus rutas bajo un nombre común usando el método group(). El nombre del grupo se convierte en un segmento que aparece antes de las rutas definidas dentro del grupo. Esto te permite reducir la cantidad de escritura necesaria para construir un conjunto extenso de rutas que comparten la misma cadena inicial. */

$routes->get('/', 'adminPagina\Home::index');

$routes->group('trabajos', function ($routes) {

    // semana 8
    $routes->get('semana8/helloWorld', 'trabajoEnClase\Semana_8Controller::hello');

    //semana 9
    $routes->get('semana9', 'trabajoEnClase\Semana_9Controller::claseS9');
    $routes->get('semana9/catalogo', 'trabajoEnClase\Semana_9Controller::catalogo');
    $routes->post('semana9/catalogo/suma', 'trabajoEnClase\Semana_9Controller::suma');

    $routes->get('semana9/suma', "trabajoEnClase\Semana_9Controller::suma");
    $routes->post('semana9/suma/respuesta', 'trabajoEnClase\Semana_9Controller::funcRespuesta');

    //semana 10
    $routes->get('semana10', 'trabajoEnClase\Semana_10Controller::index');
    $routes->get('semana10/card', 'trabajoEnClase\Semana_10Controller::card');
    $routes->get('semana10/triangulo', 'trabajoEnClase\Semana_10Controller::triangulo');

    // semana 11
    $routes->get('semana11', 'trabajoEnClase\Semana_11Controller::index');
    $routes->get('semana11/mostrar', 'trabajoEnClase\Semana_11Controller::mostrarUsuarios');
    $routes->get('semana11/mostrar/novias', 'trabajoEnClase\Semana_11Controller::mostrarNovias');

    // semana 13
    $routes->get('semana13', 'trabajoEnClase\Semana_13Controller::mostrarUsuarios');
    $routes->get('usuarios/editar/(:num)/(:num)/(:num)/(:num)/(:num)', 'trabajoEnClase\Semana_13Controller::editar/$1/$2/$3/$4/$5');
    $routes->get('usuarios/guardar/', 'trabajoEnClase\Semana_13Controller::guardar');


});

$routes->group('deberes', function ($routes) {
    // semana 8
    $routes->get('semana8', 'deberes\Semana_8Controller::index');
    $routes->get('semana8/tablas', 'deberes\Semana_8Controller::tablaDeMultiplicar');
    $routes->get('semana8/potencias', 'deberes\Semana_8Controller::potencias');

    // semana 9
    // en las ruta C1,C2,V1,V2,Z1,Z2 ingresar con mayusculas
    $routes->get('semana9', 'deberes\semana9\ControladorIndex::index');

    // las rutas de los controladores de carteras
    $routes->get('semana9/C1', 'deberes\semana9\ControladorCartera::carteraDeHombro');
    $routes->get('semana9/C2', 'deberes\semana9\ControladorCartera::carteraDeMano');

    // las rutas de los controladores de vestidos
    $routes->get('semana9/V1', 'deberes\semana9\ControladorVestido::vestidoDeFiesta');
    $routes->get('semana9/V2', 'deberes\semana9\ControladorVestido::vestidoFormal');

    // las rutas de los controladores de zapatos
    $routes->get('semana9/Z1', 'deberes\semana9\ControladorZapatos::ZapatosDeportivos');
    $routes->get('semana9/Z2', 'deberes\semana9\ControladorZapatos::ZapatosCasual');

    // semana 10 
    // login
    $routes->get('semana10', 'deberes\semana10\ControladorLogin::index');
    $routes->post('semana10/login', 'deberes\semana10\ControladorLogin::login');
    $routes->get('semana10/login', 'deberes\semana10\ControladorLogin::login');
    // rutas con parametros 
    $routes->get('semana10/carteras/(:num)', 'deberes\semana10\CarterasController::verCartera/$1');
    $routes->get('semana10/zapatos/(:num)', 'deberes\semana10\ZapatosController::verZapatos/$1');
    $routes->get('semana10/vestidos/(:num)', 'deberes\semana10\VestidosController::vervestidos/$1');
});

$routes->group('proyectos', function ($routes) {

    $routes->get('inicio', 'proyectosPersonales\Home::index');
    $routes->get('juego', 'juegos\MoverObjeto::cajaCamina');
    $routes->get('estilo', 'juegos\MoverObjeto::estiloCss1');
    $routes->get('suma', "trabajoEnClase\semana_9\practica1\SumaController::funcSumar");
    $routes->post('suma/respuesta', 'trabajoEnClase\semana_9\practica1\SumaController::funcRespuesta');

    // practicas formularios
    $routes->get('empleado', 'proyectosPersonales\formularios\EmpleadoController::index');
    $routes->post('empleado/post', 'proyectosPersonales\formularios\EmpleadoController::insertarEmpleado');

});

// $routes->group('admin', function ($routes){
//     $routes->get('suma', "proyectosPersonales\SumaController::funcSumar");
//     $routes->post('suma/respuesta', 'proyectosPersonales\SumaController::funcRespuesta');
// });