<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Halaman utama (bisa diganti jadi halaman dashboard public/customer)
$routes->get('/', 'Dashboard::home');

// AUTH (Register, Login, Logout)
$routes->get('/register', 'Auth::register');              // Form register
$routes->post('/simpan-register', 'Auth::simpanRegister');       // Proses simpan data register

$routes->get('/login', 'Auth::loginForm');                // Form login
$routes->post('/login', 'Auth::login');                   // Proses login
$routes->get('/logout', 'Auth::logout');                  // Proses logout
$routes->get('/admin', 'Dashboard::admin');
$routes->get('/customer', 'Dashboard::customer');
// Halaman dashboard setelah login (contoh: untuk customer)
$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'auth']);
