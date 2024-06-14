<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Register::index');
$routes->post('/register/process', 'Register::process');
