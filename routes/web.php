<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/pagina1", "otroControlador@pagina1");

Route::get("/pagina2", "otroControlador@pagina2");

Route::get("/pagina3", "otroControlador@pagina3");

