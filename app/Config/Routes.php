<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//Home
$routes->get('/', 'login::index');
$routes->get('/login', 'login::index');
//Home
$routes->get('/', 'ceklogin::index');
$routes->get('/ceklogin', 'ceklogin::index');

$routes->get('/', 'home::index');
$routes->get('/home', 'home::index');
$routes->post('/', 'home::index');
$routes->post('/home', 'home::index');
$routes->get('/', 'login::index');
$routes->get('/login', 'login::index');
//masterdata
$routes->post('/', 'login::index');
$routes->post('/login', 'login::index');
//masterdata
$routes->get('/', 'Masterdata::index');
$routes->get('/Masterdata', 'Masterdata::index');

$routes->get('/', 'masterdata::index');
$routes->get('/Datapemuda', 'Datapemuda::index');
$routes->get('/', 'masterdata::index');
$routes->get('/tambah', 'tambah::index');
$routes->post('/tambah', 'tambah::index');

$routes->get('/', 'masterdata::index');
$routes->get('/Datagereja', 'Datagereja::index');

$routes->get('/', 'masterdata::index');
$routes->get('/tambahgereja', 'tambahgereja::index');

$routes->get('/', 'Masterdata::index');
$routes->get('/Jadwalibadah', 'Jadwalibadah::index');

$routes->get('/', 'Masterdata::index');
$routes->get('/tambahjadwal', 'tambahjadwal::index');

$routes->get('/Masterdata', 'Pengumuman::index');
$routes->get('/Pengumuman', 'pengumuman::index');

$routes->get('/Masterdata', 'Pengumuman::index');
$routes->get('/tambahpengumuman', 'tambahpengumuman::index');

$routes->get('/', 'Masterdata::index');
$routes->get('/Events', 'Events::index');

$routes->get('/', 'Masterdata::index');
$routes->get('/Tambahevents', 'Tambahevents::index');

$routes->get('/', 'Masterdata::index');
$routes->get('/pengurus', 'pengurus::index');

$routes->get('/', 'Masterdata::index');
$routes->get('/tambahpengurus', 'tambahpengurus::index');

$routes->get('/', 'Masterdata::index');
$routes->get('/gambar', 'gambar::index');

$routes->get('/', 'Masterdata::index');
$routes->get('/Tambahgalery', 'Tambahgalery::index');
$routes->post('/Tambahgalery', 'Tambahgalery::index');
//route user
$routes->get('/', 'admin::index');
$routes->get('/admin', 'admin::index');


$routes->get('/', 'User::index');
$routes->get('/User', 'User::index');
$routes->get('/', 'User::index');

$routes->get('/tambahuser', 'tambahuser::index');
$routes->post('/tambahuser', 'tambahuser::index');


$routes->get('/', 'auth::index');
$routes->get('/auth', 'auth::index');
$routes->get('/', 'register::index');
$routes->get('/register', 'register::index');
$routes->get('/', 'auth/register::index');
$routes->get('/auth/register', 'register::index');



//route logout
$routes->get('/', 'Logout::index');
$routes->get('/Logout', 'Logout::index');

$routes->get('/', 'register::index');
$routes->get('/register', 'register::index');

$routes->get('/', 'ceklogin::index');
$routes->get('/ceklogin', 'ceklogin::index');
$routes->post('/', 'ceklogin::index');
$routes->post('/ceklogin', 'ceklogin::index');


$routes->get('/', 'login::index');
