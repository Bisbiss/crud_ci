<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/list', 'Home::list');
$routes->get('/tambah', 'Home::tambah');
$routes->post('/tambah', 'Home::pressTambah');
$routes->get('/hapus/(:num)', 'Home::delete/$1');
$routes->get('/ubah/(:num)', 'Home::ubah/$1');
$routes->post('/ubah', 'Home::pressUbah');
