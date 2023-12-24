<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Setup Routes for login and Register...
$routes->get('/register', 'AuthController::registerForm');
$routes->post('/register', 'AuthController::register');
$routes->get('/login', 'AuthController::loginForm');
$routes->post('/login', 'AuthController::login');
$routes->get('/logout', 'AuthController::logout');
$routes->get('/database/createTable', 'DatabaseController::createTable');
$routes->get('/dashboard', 'AuthController::dashboard');
