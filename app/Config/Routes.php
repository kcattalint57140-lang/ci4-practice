<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('practice1/temp', 'Practice1Controller::temp');
$routes->post('practice1/temp', 'Practice1Controller::temp');