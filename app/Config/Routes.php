<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/Index1-CVistaF1', 'CVistas::MMostrar1');

$routes->get('/Index2-CFormF1', 'CForms::MMostrar1');

$routes->get('/Index3-CResultF1', 'CResultado::MMostrar1');


