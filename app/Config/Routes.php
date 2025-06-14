<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// $routes->get('/', 'Home::index');
// $routes->get('dbtest', 'DbTest::index');

$routes->get('/', function () {
    return redirect()->to('/spareparts');
});

// Spareparts
$routes->get('/spareparts', 'Spareparts::index');
$routes->get('/spareparts/data', 'Spareparts::getData');
$routes->get('/spareparts/create', 'Spareparts::create');
$routes->post('/spareparts/store', 'Spareparts::store');
$routes->get('/spareparts/edit/(:num)', 'Spareparts::edit/$1');
$routes->post('/spareparts/update/(:num)', 'Spareparts::update/$1');
$routes->get('/spareparts/delete/(:num)', 'Spareparts::delete/$1');
