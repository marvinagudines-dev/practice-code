<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');

$routes->group('auth', function($routes) {
    $routes->get('login', 'Home::login');
    $routes->get('register', 'Home::register');
    $routes->post('login-account', 'Home::submitLogin');
    $routes->post('register-account', 'Home::submitRegister');

    $routes->get('logout', 'Home::logout');
});

$routes->group('users', function($routes) {
    $routes->get('home', 'UserController::index');
    $routes->get('profile/(:num)', 'UserController::profile/$1');
});