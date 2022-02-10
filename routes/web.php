<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProducteController;

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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/', function () {
    return view('index');
});

//#####################      Categories     ########################################################################

Route::match(['get','post'],'/dashboard/categories', [CategoriaController::class,'llistar'])->middleware(['auth'])->name("llistar_categories");


Route::get('/dashboard/categories/afegir', [CategoriaController::class,'afegir'])->middleware(['auth'])->name("afegir_categoria");
Route::post('/dashboard/categories',[CategoriaController::class,'guardar'])->middleware(['auth'])->name("guardar_categoria");

Route::match(['get','post'],'/dashboard/categories/{id}/editar', [CategoriaController::class,'editar'])->middleware(['auth'])->name("editar_categoria");

Route::match(['get','post'],'/dashboard/categories/{id}/eliminar', [CategoriaController::class,'eliminar'])->middleware(['auth'])->name("eliminar_categoria");

//##################################################################################################################################

//#####################      Productes     ########################################################################

Route::get('/dashboard/productes', [ProducteController::class,'llistar'])->middleware(['auth'])->name("llistar_productes");

Route::match(['get','post'],'/dashboard/productes/afegir', [ProducteController::class,'afegir'])->middleware(['auth'])->name("afegir_producte");
//Route::post('/productes/afegir', [ProducteController::class,'afegir'])->name("afegir_producte_save");

Route::match(['get','post'],'/dashboard/productes/{id}/editar', [ProducteController::class,'editar'])->middleware(['auth'])->name("editar_producte");
//Route::post('/productes/{id}/editar', [ProducteController::class,'editar'])->name("editar_producte_save");

Route::get('/dashboard/productes/{id}', [ProducteController::class,'fitxa'])->middleware(['auth'])->name("fitxa_producte");

Route::match(['get','post'],'/dashboard/productes/{id}/eliminar', [ProducteController::class,'eliminar'])->middleware(['auth'])->name("eliminar_producte");

//##################################################################################################################################

