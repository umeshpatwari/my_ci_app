<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Auth::index');
$routes->post('/auth/login', 'Auth::login');
$routes->get('/auth/logout', 'Auth::logout');

$routes->group('/', ['filter' => 'authCheck'], function($routes) {
    $routes->get('/dashboard', 'Dashboard::index');
    $routes->get('/customers', 'Customers::index');
    $routes->get('/customers/create', 'Customers::create');
    $routes->post('/customers/store', 'Customers::store');
    $routes->get('/customers/edit/(:num)', 'Customers::edit/$1');
    $routes->post('/customers/update/(:num)', 'Customers::update/$1');
    $routes->get('/customers/delete/(:num)', 'Customers::delete/$1');
});
