<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('practice1/temp', 'Practice1Controller::temp');
$routes->post('practice1/temp', 'Practice1Controller::temp');
$routes->get('practice2/payroll', 'Practice2Controller::index');
$routes->post('practice2/payroll', 'Practice2Controller::index');