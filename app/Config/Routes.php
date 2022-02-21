<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// $routes->METODE REQUEST GET POST/add('/LOKASI URL', 'NAMA CONTROLLER:: NAMA METHOT DI KONTrOLLER');
// $routes->get('/', 'Rumah::index');
$routes->get('/', 'Home::index'); //DEFAULT INDEX CI4

$routes->get('/coba/(:any)/(:num)', 'Coba::about/$1/$2');
// === Kalau depan pakai any, NGEBUG ngk bisa akses method fungsion controller, jadi perlu dibuat manual routenya
$routes->get('/coba/index', 'Coba::index');
$routes->get('/coba/about', 'Coba::about');

// :any = ALL
// :segment     = apapun kecuali /
// :num         = hanya angka
// :alpha       = hanya char
// :alphanum    = angka huruf

$routes->get('/users', 'Admin\Users::index');

// ====== ROUTE ANONIMOUS DUNCTION ====
// $routes->add('/coba', function(){
//     echo "Halo Function Anonimus";
// });

$routes->get('/artikel/(:segment)', 'Detail::index/$1');

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
