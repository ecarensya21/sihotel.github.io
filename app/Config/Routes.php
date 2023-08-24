<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/home', 'User\Dashboard::index', ['filter' => 'role:Tamu']);
// $routes->get('/', 'User\Dashboard::index', ['filter' => 'role:Tamu']);
$routes->get('/dashboard-admin', 'Admin\Dashboard::index');

// $routes->get('/login', 'User\Auth::index');
// $routes->get('/register', 'User\Auth::register');


$routes->get('/register', '\Myth\Auth\Controllers\AuthController::register');
$routes->post('/register', '\Myth\Auth\Controllers\AuthController::attemptRegister');
$routes->get('login', '\Myth\Auth\Controllers\AuthController::login');
$routes->post('login', '\Myth\Auth\Controllers\AuthController::attemptLogin');
$routes->get('logout', '\Myth\Auth\Controllers\AuthController::logout');



$routes->get('/detail/reguler-room', 'User\Dashboard::indexReguler');
$routes->get('/detail/reguler-room/form-booking', 'User\Booking::formReguler');
$routes->post('/detail/reguler-room/form-booking/save', 'User\Booking::saveDataReguler');

$routes->get('/statuspembayaran', 'User\StatusPembayaran::getStatusPembayaran');
// $routes->get('/detail/reguler-room/pembayaran', 'User\Booking::formBayarReguler');
// $routes->post('/detail/reguler-room/pembayaran/save', 'User\Booking::formLunasReguler');


$routes->get('/detail/deluxe-room', 'User\Dashboard::indexDeluxe');
$routes->get('/detail/deluxe-room/form-booking', 'User\Booking::formDeluxe');
$routes->post('/detail/deluxe-room/form-booking/save', 'User\Booking::saveDataDeluxe');


$routes->get('/detail/superior-room', 'User\Dashboard::indexSuperior');
$routes->get('/detail/superior-room/form-booking', 'User\Booking::formSuperior');
$routes->post('/detail/superior-room/form-booking/save', 'User\Booking::saveDataSuperior');

// Admin
// Reguler
$routes->get('/data-transaksi-reguler', 'Admin\DataReguler::index');
$routes->get('/data-transaksi-reguler/(:num)', 'Admin\DataReguler::detail/$1');
$routes->get('/data-transaksi-reguler/pembayaran/(:num)', 'Admin\Booking::pembayaranReguler/$1');
$routes->get('/data-transaksi-reguler/status/(:num)/(:any)', 'Admin\DataReguler::updateStatus/$1/$2');

// Deluxe
$routes->get('/data-transaksi-deluxe', 'Admin\DataDeluxe::index');
$routes->get('/data-transaksi-deluxe/(:num)', 'Admin\DataDeluxe::detail/$1');
$routes->get('/data-transaksi-deluxe/status/(:num)/(:any)', 'Admin\DataDeluxe::updateStatus/$1/$2');

// Superior
$routes->get('/data-transaksi-superior', 'Admin\DataSuperior::index');
$routes->get('/data-transaksi-superior/(:num)', 'Admin\DataSuperior::detail/$1');
$routes->get('/data-transaksi-superior/status/(:num)/(:any)', 'Admin\DataSuperior::updateStatus/$1/$2');




// $routes->get('/detail/president-room', 'User\Dashboard::indexPresident');
// $routes->get('/detail/president-room/form-booking', 'User\Booking::formPresident');


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
