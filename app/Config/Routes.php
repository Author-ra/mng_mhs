<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'Home::dashboard');

$routes->get('/login', 'Home::login');


$routes->group('mahasiswa', function($routes){

    $routes->get('/', 'MahasiswaController::index');
    $routes->get('tambah', 'MahasiswaController::form_tambah');
    $routes->post('tambah', 'MahasiswaController::tambah');
    $routes->get('edit/(:num)', 'MahasiswaController::edit/$1');
    $routes->post('update/(:num)', 'MahasiswaController::update/$1');
    $routes->get('delete/(:num)', 'MahasiswaController::delete/$1');
});



$routes->group('dosen', function($routes){

    $routes->get('/', 'DosenController::index');
    $routes->get('tambah', 'DosenController::form_tambah');
    $routes->post('tambah', 'DosenController::tambah');

    $routes->get('edit/(:num)', 'DosenController::edit/$1');
    $routes->post('update/(:num)', 'DosenController::update/$1');

    $routes->get('delete/(:num)', 'DosenController::delete/$1');
});
