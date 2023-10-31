<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('users', 'UserController::index');
$routes->get('users/usuarios', 'UserController::usuarios');
$routes->get('users/usuarios2', 'UserController::usuarios2');
$routes->get('users/usuarios3', 'UserController::usuarios3');
$routes->get('posts/ejercicio01', 'PostController::ejercicio01');
$routes->get('posts/ejercicio02', 'PostController::ejercicio02');
$routes->get('posts/ejercicio04', 'PostController::ejercicio04');
$routes->get('posts/ejercicio05', 'PostController::ejercicio05');


$routes->get('exportar', 'DescargaController::descargaBD');
