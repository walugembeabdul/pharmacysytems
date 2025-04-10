<?php

use App\Http\Controllers\CategoryManager;
use App\Http\Controllers\ProductsManager;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get("home",[CategoryManager::class,"home"])->name("home");
route::get("store",[CategoryManager::class,"store"])->name("store");
route::post("create",[CategoryManager::class,"create"])->name("create");
Route::get("prohome",[ProductsManager::class,"prohome"])->name("prohome");
Route::get("prostore",[ProductsManager::class,"prostore"])->name("prostore");
Route::post("procreate",[ProductsManager::class,"procreate"])->name("procreate");

