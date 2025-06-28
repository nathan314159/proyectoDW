<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/helloWorld', 'Home::hello');

// ---> semana 8 deber de tablaMultiplicar y Potencias
$routes->get('/tablas', 'DeberSemana8::tablaDeMultiplicar');
$routes->get('/potencias', 'DeberSemana8::potencias');

// ---> semana 9 trabajo de proyectosPersonales
$routes->get('/claseS9', 'Home::claseS9');

// formulario de suma de dos numeros
$routes->get('/catalogo', 'Home::catalogo');
$routes->post('/catalogo/suma', 'Home::suma');

// ejemplo independiente the nathan para ejercicio suma
$routes->get('/suma', 'semana9\SumaController::funcSumar');
$routes->post('/suma/respuesta', 'semana9\SumaController::funcRespuesta');