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
    return view('login');
});

Route::get('/cadastrar-funcionario', function () {
    return view('cadastro_funcionario');
});

Route::get('/cadastrar-departamento', function () {
    return view('cadastro_departamento');
});

Route::get('/cadastrar-sala', function () {
    return view('cadastro_sala');
});
