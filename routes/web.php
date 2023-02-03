<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\TopPageController;
use \App\Http\Controllers\Auth\LoginController;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\RoleController;
use \App\Http\Controllers\CustomerController;
use \App\Http\Controllers\CustomerSearchController;
use \App\Http\Controllers\CustomerLogController;
use \App\MyServices;

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
//Route::get('/top_page', [\App\Http\Controllers\TopPageController::class, 'top_page'])->name('top_page');


Auth::routes();

Route::get('/', [\App\Http\Controllers\TopPageController::class, 'top_page'])->name('top_page');

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/users', \App\Http\Controllers\UserController::class)->name('社員一覧')->middleware('auth');

Route::get('/roles', \App\Http\Controllers\RoleController::class)->name('ロール一覧')->middleware('auth');

Route::resource('/customers', \App\Http\Controllers\CustomerController::class)->middleware('auth');

//Route::resource('/customers', '\App\Http\Controllers\CustomerController')->middleware('auth');

Route::get('customer_search', [\App\Http\Controllers\CustomerSearchController::class, 'index'])->middleware('auth');

Route::post('customer_search', [\App\Http\Controllers\CustomerSearchController::class, 'search'])->middleware('auth');

//Route::get('/customers/{customer}/logs', \App\Http\Controllers\CustomerLogController::class)->middleware('auth');

Route::post('/customers/{customer}/logs', \App\Http\Controllers\CustomerLogController::class)->middleware('auth');

//Route::post('/customers/{customer}/logs', \App\Customer::class)->middleware('auth');

//Route::post('/customers/{customer}/logs', 'CustomerLogController')->middleware('auth');
//Route::get('login', [\App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');

//Route::post('login', [\App\Http\Controllers\Auth\LoginController::class, 'login']);

Route::get('logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::post('logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
//Route::get('customer_search', [\App\Http\Controllers\CustomerSearchController::class, 'myapplicationservice'])->middleware('auth');

//Route::post('customer_search', [\App\Http\Controllers\CustomerSearchController::class, 'myapplicationservice'])->middleware('auth');
//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
