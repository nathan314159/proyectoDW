<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/helloWorld', 'Home::hello');

// semana 8 deber de tablaMultiplicar y Potencias
$routes->get('/tablas', 'DeberSemana8::tablaDeMultiplicar');
$routes->get('/potencias', 'DeberSemana8::potencias');

// semana 9 trabajo en clases 
$routes->get('/claseS9', 'Home::claseS9');

$routes->get('/catalogo', 'Home::catalogo');