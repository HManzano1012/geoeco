<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/login', 'AuthController::index');
$routes->get('/', 'Home::index');

$routes->group('/dashboard', ['filter' => 'auth'], function ($routes) {
  $routes->get('', 'Home::dashboard');
  $routes->get('login', 'API\Login::index');
  $routes->get('logout', 'API\Login::logout');
});

$routes->group('api', function ($routes) {
  $routes->post('savesuc','Home::saveSucursal');
  $routes->post('place/aprove','Home::aprovePlace');
  $routes->group('auth', function ($routes) {
    $routes->post('login', 'AuthController::login');
    $routes->post('logout', 'AuthController::logout');
  });
});


