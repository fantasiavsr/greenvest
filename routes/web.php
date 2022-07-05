<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\ItemController;


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
    return view('index', ['title' => 'Home']);
});

/* login page */
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
/* register page */
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

/* Route::get('/home', [homeController::class, 'index'])->middleware('auth', 'User')->name('home'); */

/* Resource */
Route::resource('user', UserController::class)->middleware('auth', 'user');
/* Route::resource('developer', DeveloperController::class)->middleware('auth', 'developer'); */

/* Portofolio */
Route::get('portofolio', [PortofolioController::class, 'index'])->middleware('auth', 'user')->name('portofolio');
/* Transaksi */
Route::get('transaksi green-bond', [TransaksiController::class, 'greenbond'])->middleware('auth', 'user')->name('transaksi.greenbond');
Route::get('transaksi green-sukuk', [TransaksiController::class, 'greensukuk'])->middleware('auth', 'user')->name('transaksi.greensukuk');
Route::get('transaksi green-taxonomy', [TransaksiController::class, 'greentaxonomy'])->middleware('auth', 'user')->name('transaksi.greentaxonomy');
Route::get('transaksi list-transaksi', [TransaksiController::class, 'listtransaksi'])->middleware('auth', 'user')->name('transaksi.list');

/* Item */
Route::get('item detail', [ItemController::class, 'indextest'])->middleware('auth', 'user')->name('item.detail');
/* Route::get('item detail/{id}', [ItemController::class, 'index'])->middleware('auth', 'user')->name('item.detail'); */

/* Route::get('/admin-item', [adminController::class, 'index'])->middleware('auth', 'isAdmin');
Route::delete('/admin-item/{id}', [adminController::class, 'deleteItem']);
Route::get('/admin-item/edit/{id}', [adminController::class, 'mengubahItem']);
Route::post('/admin-item/{id}', [adminController::class, 'ubahdataItem']);
Route::get('/admin-createitem', [adminController::class, 'createItem']);
Route::post('/admin-createiteme', [adminController::class, 'storeItem']); */
