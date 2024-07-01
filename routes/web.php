<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

/*Route::get('/', 'HomeController@index')->name('home');
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/login', 'AuthController@doLogin');
Route::get('/register', 'AuthController@register')->name('register');
Route::post('/register', 'AuthController@doRegister');
Route::get('/user/edit', 'UserController@edit')->name('user.edit');
Route::post('/user/edit', 'UserController@update');
Route::get('/products/create', 'ProductController@create')->name('products.create');
Route::post('/products/create', 'ProductController@store');*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/cadastro', [UserController::class, 'showFormCadastro'])->name('cadastro');
Route::post('/cadastro', [UserController::class, 'cadastro'])->name('user.cadastro');

Route::get('/carrinho', [UserController::class, 'showCarrinho'])->name('carrinho');
Route::get('/produto', [UserController::class, 'showProduto'])->name('produto');