<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::view('/teste', 'tela-teste');

Route::view('/cadastro', 'tela-cadastro');
