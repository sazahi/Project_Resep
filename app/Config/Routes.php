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
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Product::index');
$routes->get('daftar', 'DaftarResep::index');
$routes->get('aku', 'Aku::index');
$routes->get('kamu', 'HelloController::index');
$routes->get('beta', 'CobaRestfulController::index');
$routes->get('product/about', 'Product::about');
$routes->get('product/admin/', 'Product::admin');
$routes->get('product/admin/(:num)', 'Product::admin/$1');
$routes->post('product/aboutt', 'Product::about');
$routes->get('product/detail', 'Detailresep::index');
$routes->post('/product/admin/insert', 'Product::insert');
$routes->post('/product/admin/edit', 'Product::edit');
$routes->get('/product/admin/delete/(:num)', 'Product::delete/$1');
$routes->resource('product');
$routes->resource('login');
$routes->post('/authent', 'Login::proses_log');
$routes->get('/logout', 'Login::logout');

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
