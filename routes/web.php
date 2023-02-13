<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
//Route::get('register', App\Http\Controllers\Auth\RegisterController::class,'register')->name('register.register');
//Route::post('register', App\Http\Controllers\Auth\RegisterController::class);

Route::resource('/actividadesapoyos',App\Http\Controllers\ActividadesapoyoController::class)->middleware('can:actividadesapoyos.index')->names('actividadesapoyos');
Route::resource('/organigramas',App\Http\Controllers\OrganigramaController::class)->middleware('can:organigramas.index')->names('organigramas');
Route::resource('/carreras',App\Http\Controllers\CarreraController::class)->names('carreras');
Route::resource('/materias',App\Http\Controllers\MateriaController::class)->names('materias');
Route::resource('/periodos',App\Http\Controllers\PeriodoController::class)->names('periodos');

Route::get('/herramientaadmin', [App\Http\Controllers\PeriodoController::class,'herraadmin'])
->name('periodos.herraadmin');///herramientas de administrador
Route::get('/herramientaadmin/eliminar', [App\Http\Controllers\PeriodoController::class,'eliminar'])
->name('periodos.eliminar');///herramientas de administrador

Route::get('/herramientaadmin/llenartabla', [App\Http\Controllers\PeriodoController::class,'llenartablas'])
->name('periodos.llenartabla');///herramientas de administrador

Route::resource('/catalogodocentes',App\Http\Controllers\CatalogodocenteController::class)->names('catalogodocentes');

Route::get('/catalogodocente/busqueda',[App\Http\Controllers\CatalogodocenteController::class,'busqueda'])->name('catalogodocentes.busqueda');
Route::get('/catalogodocente/buscar',[App\Http\Controllers\CatalogodocenteController::class,'mdocumento'])->name('catalogodocentes.mdocumento');
Route::get('catalogodocente/{id}/download',[App\Http\Controllers\CatalogodocenteController::class,'download'])->name('catalogodocentes.download');

Route::resource('/evaluaciondocentes',App\Http\Controllers\EvaluaciondocenteController::class)->middleware('can:evaluaciondocentes.index')->names('evaluaciondocentes');
Route::get('evaluaciondocentes/{id}/download',[App\Http\Controllers\EvaluaciondocenteController::class,'download'])->name('evaluaciondocentes.download');

Route::resource('/evaluaciondepartamentos',App\Http\Controllers\EvaluaciondepartamentoController::class)->middleware('can:evaluaciondepartamentos.index')->names('evaluaciondepartamentos');
Route::get('evaluaciondepartamentos/{id}/download',[App\Http\Controllers\EvaluaciondepartamentoController::class,'download'])->name('evaluaciondepartamentos.download');

Route::get('/buscar',[App\Http\Controllers\HorarioController::class,'buscar'])->name('horarios.buscar');
Route::get('/horario/buscar',[App\Http\Controllers\HorarioController::class,'busqueda'])->name('horarios.busqueda');


Route::resource('/cedulaceros',App\Http\Controllers\CedulaceroController::class)->middleware('can:actividadesapoyos.index')->names('cedulaceros');
//Route::get('/cedulaceross',[App\Http\Controllers\CedulaceroController::class,'updatee'])->name('cedulaceros.updatee');

Route::get('cedulaceros/{id}/download',[App\Http\Controllers\CedulaceroController::class,'download'])->name('cedulaceros.download');
//Route::get('cedulaceros/{id}/descargar',[App\Http\Controllers\CedulaceroController::class,'descargar'])->name('cedulaceros.descargar');


Route::resource('/recursoshumanos',App\Http\Controllers\RecursoshumanoController::class)->names('recursoshumanos');
Route::get('recursoshumanos/{id}/download',[App\Http\Controllers\RecursoshumanoController::class,'download'])->name('recursoshumanos.download');


Route::resource('/horarios',App\Http\Controllers\HorarioController::class)->names('horarios');//no entra al create pero no dice que error es, creo que es error de memoria limitada
Route::resource('/grupos',App\Http\Controllers\GrupoController::class)->middleware('can:organigramas.index')->names('grupos');;//memoria excedida
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::resource('users', App\Http\Controllers\UserController::class)->only(['index','edit','update'])->names('users');
//->middleware(['can:usuarios.index','can:usuarios.edit','can:usuarios.update'])
Route::resource('roles',App\Http\Controllers\RoleController::class)->names('roles');

Route::get('buscardocente',[App\Http\Controllers\CatalogodocenteController::class,'searchByName'])->name('catalogodocentes.searchByName');

