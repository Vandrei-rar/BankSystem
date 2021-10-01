<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/abrirconta', function() {
    return view('site.abrasuaconta');
})->name('abrirconta');

Route::get('/', function(){
    return view('site.index');
})->name('index'); //Não usado no momento

Route::get('/login', function(){
    return view('site.login');
})->name('login');

Route::get('/recuperarsenha', function(){
    return view('site.recuperarsenha');
})->name('recuperarsenha');
