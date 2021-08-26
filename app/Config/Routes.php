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
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// Landing
$routes->get('/', 'Home::index');

// Login
$routes->get('/masuk', 'Masuk::index');
$routes->post('/masuk/auth', 'Masuk::auth');
$routes->add('/masuk/logout', 'Masuk::logout');

// Registrasi
$routes->get('/registrasi', 'Registrasi::index');
$routes->post('/registrasi/create', 'Registrasi::create');

// Pengumuman
$routes->get('admin', 'Admin\Ringkasan::index', ['filter' => 'cek_admin']);
$routes->get('admin/pengumuman', 'Admin\Pengumuman::index', ['filter' => 'cek_admin']);
$routes->get('admin/pengumuman/new', 'Admin\Pengumuman::new', ['filter' => 'cek_admin']);
$routes->post('admin/pengumuman/post', 'Admin\Pengumuman::post', ['filter' => 'cek_admin']);
$routes->post('admin/pengumuman/update', 'Admin\Pengumuman::update', ['filter' => 'cek_admin']);
$routes->get('admin/pengumuman/sunting/(:any)', 'Admin\Pengumuman::sunting/$1', ['filter' => 'cek_admin']);
$routes->add('admin/pengumuman/del/(:any)', 'Admin\Pengumuman::del/$1', ['filter' => 'cek_admin']);

// Peserta
$routes->get('admin/peserta', 'Admin\Peserta::index', ['filter' => 'cek_admin']);
$routes->post('admin/peserta/ubah', 'Admin\Peserta::ubah', ['filter' => 'cek_admin']);

// Referal
$routes->get('admin/referal', 'Admin\Referal::index', ['filter' => 'cek_admin']);
$routes->post('admin/referal/store', 'Admin\Referal::store', ['filter' => 'cek_admin']);

// Unggah Karya
$routes->get('/user/unggah-penulisan', 'User\Unggah_Penulisan::index', ['filter' => 'cek_user']);
$routes->post('/user/unggah-penulisan/send', 'User\Unggah_Penulisan::send', ['filter' => 'cek_user']);
$routes->get('/user/unggah-fotografi', 'User\Unggah_Fotografi::index', ['filter' => 'cek_user']);
$routes->post('/user/unggah-fotografi/send', 'User\Unggah_Fotografi::send', ['filter' => 'cek_user']);
$routes->get('/user/unggah-desain', 'User\Unggah_Desain::index', ['filter' => 'cek_user']);
$routes->post('/user/unggah-desain/send', 'User\Unggah_Desain::send', ['filter' => 'cek_user']);
$routes->get('/user/unggah-videografi', 'User\Unggah_Videografi::index', ['filter' => 'cek_user']);
$routes->post('/user/unggah-videografi/send', 'User\Unggah_Videografi::send', ['filter' => 'cek_user']);

// Pengumuman User
$routes->get('/user', 'User\Pengumuman::index', ['filter' => 'cek_user']);
$routes->get('/user/pengumuman', 'User\Pengumuman::index', ['filter' => 'cek_user']);
$routes->get('/user/linimasa', 'User\Linimasa::index', ['filter' => 'cek_user']);

// Liliecomp
$routes->addRedirect('/liliecomp', '/#kompetisi');
$routes->get('/liliefors', 'liliecomp\Liliefors::index');
$routes->post('/liliefors/daftar', 'liliecomp\Liliefors::daftar');

// API Referal
$routes->resource('api/referal', ['controller' => 'Api\Referal']);

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
