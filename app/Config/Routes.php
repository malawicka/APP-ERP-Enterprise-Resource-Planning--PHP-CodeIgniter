<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'UserController::login');
$routes->match(['get', 'post'], 'login', 'UserController::login', ["filter" => "noauth"]);

$routes->group("", ["filter" => "auth"], function ($routes) {
    $routes->get("/administrator", "AdminController::index");
    $routes->get("/administrator/datapengguna", "PenggunaController::index");
    $routes->get("/administrator/datapengguna/hapus/(:any)", "PenggunaController::hapus/$1");
    $routes->get("/administrator/datapengguna/tambah/", "PenggunaController::tambah");
    $routes->post("/administrator/datapengguna/simpandata/", "PenggunaController::simpandata");
    $routes->get("/administrator/datapengguna/edit/(:any)", "PenggunaController::edit/$1");
    $routes->post("/administrator/datapengguna/updatedata/", "PenggunaController::updatedata");
    $routes->get("/administrator/datapengguna/uploadfoto/(:any)", "PenggunaController::uploadfoto/$1");
    $routes->post("/administrator/datapengguna/simpanfoto/", "PenggunaController::simpanfoto");

    $routes->get("/administrator/datasupplier", "SupplierController::index");
    $routes->get("/administrator/datasupplier/hapus/(:any)", "SupplierController::hapus/$1");
    $routes->get("/administrator/datasupplier/tambah/", "SupplierController::tambah");
    $routes->post("/administrator/datasupplier/simpandata/", "SupplierController::simpandata");
    $routes->get("/administrator/datasupplier/edit/(:any)", "SupplierController::edit/$1");
    $routes->post("/administrator/datasupplier/updatedata/", "SupplierController::updatedata");

    $routes->get("/administrator/databarang", "BarangController::index");
    $routes->get("/administrator/databarang/hapus/(:any)", "BarangController::hapus/$1");
    $routes->get("/administrator/databarang/tambah/", "BarangController::tambah");
    $routes->post("/administrator/databarang/simpandata/", "BarangController::simpandata");
    $routes->get("/administrator/databarang/edit/(:any)", "BarangController::edit/$1");
    $routes->post("/administrator/databarang/updatedata/", "BarangController::updatedata");

    $routes->get("/administrator/datapembelian", "PembelianController::index");
    $routes->get("/administrator/datapembelian/hapus/(:any)", "PembelianController::hapus/$1");
    $routes->get("/administrator/datapembelian/tambah/", "PembelianController::tambah");
    $routes->post("/administrator/datapembelian/simpandata/", "PembelianController::simpandata");
    $routes->get("/administrator/datapembelian/edit/(:any)", "PembelianController::edit/$1");
    $routes->post("/administrator/datapembelian/updatedata/", "PembelianController::updatedata");
   


});

$routes->get('logout', 'UserController::logout');
