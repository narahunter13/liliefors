<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
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
$routes->get('/', 'Home::index');

// Pengumuman
$routes->get('admin/pengumuman', 'Admin\Pengumuman::index', ['filter' => 'cek_admin']);
$routes->get('admin/pengumuman/new', 'Admin\Pengumuman::new', ['filter' => 'cek_admin']);
$routes->post('admin/pengumuman/post', 'Admin\Pengumuman::post', ['filter' => 'cek_admin']);
$routes->post('admin/pengumuman/update', 'Admin\Pengumuman::update', ['filter' => 'cek_admin']);
$routes->post('admin/pengumuman/sunting/(:any)', 'Admin\Pengumuman::sunting/$1', ['filter' => 'cek_admin']);
$routes->post('admin/pengumuman/del/(:any)', 'Admin\Pengumuman::del/$1', ['filter' => 'cek_admin']);

// Peserta
$routes->get('admin/peserta', 'Admin\Peserta::index', ['filter' => 'cek_admin']);
$routes->post('admin/peserta/ubah', 'Admin\Peserta::ubah', ['filter' => 'cek_admin']);

// Referal
$routes->get('admin/referal', 'Admin\Referal::index', ['filter' => 'cek_admin']);
$routes->post('admin/referal/store', 'Admin\Referal::store', ['filter' => 'cek_admin']);


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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
