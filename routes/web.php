<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\CedulacerosistemascompController;
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

Auth::routes();

Route::resource('/docsistemas',App\Http\Controllers\DocsistemaController::class);
Route::resource('/cedulacerosistemas',App\Http\Controllers\CedulacerosistemaController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/homeRH', [App\Http\Controllers\HomeController::class, 'indexRH'])->name('homeRH');


Route::get('cedulacerosistemas/{uuid}/download', [App\Http\Controllers\CedulacerosistemaController::class, 'download'])->name('cedulacerosistemas.download');
Route::resource('cedulacerosistemas', App\Http\Controllers\CedulacerosistemaController::class)->middleware('auth');
//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
