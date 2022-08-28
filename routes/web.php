<?php

use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


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

// Route::get('/', function () {
//     return view('home');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/post', [App\Http\Controllers\HomeController::class, 'post']);

Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/produk/form', [ProdukController::class, 'create']);
Route::post('/produk/store', [ProdukController::class, 'store']);
Route::get('/produk/edit/{ID}', [ProdukController::class, 'edit']);
Route::put('/produk/edit/{ID}', [ProdukController::class, 'update']);
Route::delete('/produk/{ID}', [ProdukController::class, 'destroy']);

Route::get('/toko', [TokoController::class, 'index']);
Route::get('/toko/form', [TokoController::class, 'create']);
Route::post('/toko/store', [TokoController::class, 'store']);
Route::get('/toko/edit/{ID}', [TokoController::class, 'edit']);
Route::put('/toko/edit/{ID}', [TokoController::class, 'update']);
Route::delete('/toko/{ID}', [TokoController::class, 'destroy']);

Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori/form', [KategoriController::class, 'create']);
Route::post('/kategori/store', [KategoriController::class, 'store']);
Route::get('/kategori/edit/{ID}', [KategoriController::class, 'edit']);
Route::put('/kategori/edit/{ID}', [KategoriController::class, 'update']);
Route::delete('/kategori/{ID}', [KategoriController::class, 'destroy']);

Route::get('/user', [UserController::class, 'index']);
