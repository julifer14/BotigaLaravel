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

Route::get('/', function () {
    return view('index');
});

//#####################      Categories     ########################################################################

Route::get('/categories', [CategoriaController::class,'llistar'])->name("llistar_categories");
Route::post('/categories',[CategoriaController::class,'guardar'])->name("guardar_categoria");

Route::get('/categories/afegir', [CategoriaController::class,'afegir'])->name("afegir_categoria");

Route::post('/categories/{id}/editar', [CategoriaController::class,'editar'])->name("editar_categoria_save");
Route::get('/categories/{id}/editar', [CategoriaController::class,'editar'])->name("editar_categoria");

Route::get('/categories/{id}/eliminar', [CategoriaController::class,'eliminar'])->name("eliminar_categoria");
Route::post('/categories/{id}/eliminar', [CategoriaController::class,'eliminar'])->name("eliminar_categoria_save");

//##################################################################################################################################

//#####################      Productes     ########################################################################

Route::get('/productes', [ProducteController::class,'llistar'])->name("llistar_productes");
Route::get('/productes/afegir', [ProducteController::class,'afegir'])->name("afegir_producte");
Route::post('/productes/afegir', [ProducteController::class,'afegir'])->name("afegir_producte_save");

Route::get('/productes/{id}', [ProducteController::class,'fitxa'])->name("fitxa_producte");


//##################################################################################################################################