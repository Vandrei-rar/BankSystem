<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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

Route::get('/abrirconta', function () {
    return view('site.abrasuaconta');
})->name('abrirconta');

Route::get('/', function () {
    return view('site.index');
})->name('index'); //Não usado no momento

// Route::get('/login', function(){
//     return view('site.login');
// })->name('login');




// Chamando o formulário de login.
Route::get(
    '/login',
    [AuthController::class, 'formlogin']
)->name('form_login');

// Chamando o método de autenticação do usuário.
Route::post(
    '/login',
    [AuthController::class, 'authUser']
)->name('authUser');

// Entrando na dashboard, se a middleware autorizar.
Route::get('/dashboard', function () {
    return view('site.dashboard.indexdash');
})->name('dashboard')->middleware('auth.confirm');

// Saindo da sessão, se a middleware autorizar.
Route::get(
    '/logout',
    [AuthController::class, 'logout']
)->name('logout')->middleware('auth.confirm');

// Form de recuperar senha.
Route::get('/recuperarsenha', function () {
    return view('site.recuperarsenha');
})->name('recuperarsenha');

// Form de cadastro.
Route::get('/abrasuaconta', function () {
    return view('site.abrasuaconta');
})->name('abrasuaconta');





/*
    Rotas para chamada interna de itens da dashboard.
*/

Route::get('/saldo', function () {
    return view('site.dashboard.saldo');
})->name('dash-saldo');

Route::get('/transferencia', function () {
    return view('site.dashboard.transferencia');
})->name('dash-transferencia');

Route::get('/dadosconta', function () {
    return view('site.dashboard.dadosdaconta');
})->name('dash-dadosconta');




/*Criando CRUD
Route::get('/cadastro', 'ClienteController@create');*/
Route::post(
    '/cadastrocliente',
    [ClienteController::class, 'store']
)->name('store');
