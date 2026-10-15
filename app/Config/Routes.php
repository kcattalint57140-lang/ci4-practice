<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('practice1/temp', 'Practice1Controller::temp');
$routes->post('practice1/temp', 'Practice1Controller::temp');

$routes->get('practice2/payroll', 'Practice2Controller::index');
$routes->post('practice2/payroll', 'Practice2Controller::index');

$routes->post('practice3/hello', 'Practice3Controller::index');
$routes->get('practice3/hello', 'Practice3Controller::index');

$routes->post('practice4/discount', 'Practice4Controller::index');
$routes->get('practice4/discount', 'Practice4Controller::index');

$routes->post('practice5/bmi_clac', 'Practice5Controller::index');
$routes->get('practice5/bmi_clac', 'Practice5Controller::index');

$routes->post('practice6/payroll', 'Practice6Controller::index');
$routes->get('practice6/payroll', 'Practice6Controller::index');

$routes->post('practice7/bill', 'Practice7Controller::index');
$routes->get('practice7/bill', 'Practice7Controller::index');