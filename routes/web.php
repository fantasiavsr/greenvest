<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\DashboardController;
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
Route::resource('user', UserController::class)->middleware('auth', 'user', 'admin');
/* Route::resource('developer', DeveloperController::class)->middleware('auth', 'developer'); */

/* dummy bankdef - user dashboard */
Route::post('bankdef/{id}', [UserController::class, 'bankdefupdate'])->name('bankdef.bankdefupdate');

/* Route::get('dashboard', [DashboardController::class, 'index'])->middleware('auth', 'user')->name('dashboard'); */
/* Portofolio */
Route::get('portofolio', [PortofolioController::class, 'index'])->middleware('auth', 'user')->name('portofolio');
/* Transaksi */
Route::get('transaksi green-bond', [TransaksiController::class, 'greenbond'])->middleware('auth', 'user')->name('transaksi.greenbond');
Route::get('transaksi green-sukuk', [TransaksiController::class, 'greensukuk'])->middleware('auth', 'user')->name('transaksi.greensukuk');
Route::get('transaksi green-taxonomy', [TransaksiController::class, 'greentaxonomy'])->middleware('auth', 'user')->name('transaksi.greentaxonomy');
Route::get('transaksi list-transaksi', [TransaksiController::class, 'listtransaksi'])->middleware('auth', 'user')->name('transaksi.list');

/* Item */
Route::get('item detail', [ItemController::class, 'indextest'])->middleware('auth', 'user')->name('item.detailtest');
Route::get('item detail/{id}', [ItemController::class, 'index'])->middleware('auth', 'user')->name('item.detail');

Route::get('item simulasi', [ItemController::class, 'simulasitest'])->middleware('auth', 'user')->name('item.simulasitest');
/* Route::get('item simulasi2', [ItemController::class, 'simulasitest2'])->middleware('auth', 'user')->name('item.simulasitest2'); */
Route::get('item simulasi/{id}', [ItemController::class, 'simulasi'])->middleware('auth', 'user')->name('item.simulasi');
Route::post('item simulasi', [ItemController::class, 'dummy_simulasi'])->middleware('auth', 'user')->name('item.dummysimulasi');

Route::get('item banding', [ItemController::class, 'bandingtest'])->middleware('auth', 'user')->name('item.bandingtest');
/* Route::get('item banding/{id}', [ItemController::class, 'banding'])->middleware('auth', 'user')->name('item.banding'); */

Route::get('item beli', [ItemController::class, 'belitest'])->middleware('auth', 'user')->name('item.belitest');
Route::get('item beli/{id}', [ItemController::class, 'beli'])->middleware('auth', 'user')->name('item.beli');
Route::post('item beli', [TransaksiController::class, 'store'])->name('transaksi.store');


Route::get('admin-transaksi', [AdminController::class, 'list_transaksi'])->middleware('auth', 'admin')->name('admin.transaksi');
Route::get('admin-transaksi/{id}', [AdminController::class, 'edit_transaksi'])->middleware('auth', 'admin')->name('admin.edit.transaksi');
Route::post('admin-transaksi', [AdminController::class, 'update_transaksi'])->middleware('auth', 'admin')->name('admin.update.transaksi');
Route::get('admin-item', [AdminController::class, 'list_item'])->middleware('auth', 'admin')->name('admin.item');
Route::get('admin-item/{id}', [AdminController::class, 'edit_item'])->middleware('auth', 'admin')->name('admin.edit.item');
Route::post('admin-item', [AdminController::class, 'update_item'])->middleware('auth', 'admin')->name('admin.update.item');
