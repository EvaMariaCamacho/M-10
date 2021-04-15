<?php

use App\Http\controllers\CatalogController;
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

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/catalog', function () {
    return view('catalog.index');
});

Route::get('/catalog/create', [CatalogController::class, 'create']);*/

Route::get('/', function () {
    return view('auth.login');
});


Route::resource('catalog', CatalogController::class)->middleware('auth');

Auth::routes();

Route::get('/home', [CatalogController::class, 'index'])->name('home');

Route::group(['middleware'=> 'auth'], function () {

    route::get('/', [CatalogController::class, 'index'])->name('home');
    
});