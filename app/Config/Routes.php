<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

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
});

$routes->group('deberes', function ($routes) {
    // semana 8
    $routes->get('semana8', 'deberes\Semana_8Controller::index');
    $routes->get('semana8/tablas', 'deberes\Semana_8Controller::tablaDeMultiplicar');
    $routes->get('semana8/potencias', 'deberes\Semana_8Controller::potencias');

    // semana 9
});

$routes->group('proyectos', function ($routes) {

    $routes->get('inicio', 'proyectosPersonales\Home::index');
    $routes->get('juego', 'juegos\MoverObjeto::cajaCamina');
    $routes->get('estilo', 'juegos\MoverObjeto::estiloCss1');
    $routes->get('suma', "trabajoEnClase\semana_9\practica1\SumaController::funcSumar");
    $routes->post('suma/respuesta', 'trabajoEnClase\semana_9\practica1\SumaController::funcRespuesta');
});

// $routes->group('admin', function ($routes){
//     $routes->get('suma', "proyectosPersonales\SumaController::funcSumar");
//     $routes->post('suma/respuesta', 'proyectosPersonales\SumaController::funcRespuesta');
// });