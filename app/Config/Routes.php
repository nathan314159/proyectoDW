<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'proyectosPersonales\Home::index');

$routes->group('trabajos', function ($routes) {

    // semana 8
    $routes->get('semana8/juego', 'trabajoEnClase\Semana_8Controller::index');
    $routes->get('semana8/helloWorld', 'trabajoEnClase\Semana_8Controller::hello');

    //semana 9
    $routes->get('semana9', 'trabajoEnClase\Semana_9Controller::claseS9');
    $routes->get('semana9/catalogo', 'trabajoEnClase\Semana_9Controller::catalogo');
    $routes->post('semana9/catalogo/suma', 'trabajoEnClase\Semana_9Controller::suma');
});

$routes->group('deberes', function ($routes){
    // semana 8
    $routes->get('semana8', 'deberes\Semana_8Controller::index');
    $routes->get('semana8/tablas', 'deberes\Semana_8Controller::tablaDeMultiplicar');
    $routes->get('semana8/potencias', 'deberes\Semana_8Controller::potencias');
        
    // semana 9
});

$routes->group('proyectos', function ($routes){
    $routes->get('suma', "proyectosPersonales\SumaController::funcSumar");
    $routes->post('suma/respuesta', 'proyectosPersonales\SumaController::funcRespuesta');
});