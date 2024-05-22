<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/logout', 'Auth::logout');
$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::processLogin');
$routes->get('/register', 'Auth::register');
$routes->post('/register', 'Auth::processRegister');

$routes->group('', ['namespace' => 'App\Controllers', 'middleware' => 'authentication'], function ($routes) {
    $routes->get('/', 'Home::index');
    $routes->get('/brands', 'Brands::index');
    $routes->get('/collection', 'Collection::index');
    $routes->get('/features', 'Features::index');
    $routes->get('/feature/(:num)', 'Feature::detail/$1');
    $routes->get('/womenscent', 'WomenScent::index');
    $routes->get('/men', 'Home::men');
    $routes->get('/women', 'Home::women');
});
