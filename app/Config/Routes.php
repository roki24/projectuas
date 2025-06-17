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
$routes->get('/customer', 'CustomerController::index');
$routes->get('/motor', 'CustomerController::motor');
$routes->get('customer/beli/(:num)', 'CustomerController::beli/$1');
$routes->get('/riwayat', 'CustomerController::riwayat');
$routes->get('/pembayaran', 'Pembayaran::index');
$routes->post('pembayaran/simpan', 'Pembayaran::simpan');



$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'auth']);
//halaman keranjang
$routes->get('/keranjang', 'Keranjang::index');
$routes->get('/keranjang/tambah/(:num)', 'Keranjang::tambah/$1');
$routes->get('/keranjang/hapus/(:num)', 'Keranjang::hapus/$1');
// Halaman utama daftar motor
$routes->get('/daftar_motor', 'AdminController::daftar_motor');
$routes->get('/motor/tambah', 'AdminController::tambah_motor');
$routes->post('/motor/simpan', 'AdminController::simpan_motor');
$routes->get('/motor/edit/(:num)', 'AdminController::edit/$1');
$routes->post('/motor/update/(:num)', 'AdminController::update/$1');
$routes->get('/motor/hapus/(:num)', 'AdminController::hapus_motor/$1');
$routes->group('', ['namespace' => 'App\Controllers'], function($routes) {
    // Tampilkan halaman keranjang
    $routes->get('cart', 'CartController::index');
    // Tambah item ke keranjang (via tombol Beli / 🛒)
    $routes->post('cart/add/(:num)', 'CartController::add/$1');
    // Hapus item dari keranjang
    $routes->post('cart/remove/(:num)', 'CartController::remove/$1');
    // Kosongkan keranjang
    $routes->post('cart/clear', 'CartController::clear');
});
