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

Route::match(['get','post'],'/categories', [CategoriaController::class,'llistar'])->name("llistar_categories");


Route::get('/categories/afegir', [CategoriaController::class,'afegir'])->name("afegir_categoria");
Route::post('/categories',[CategoriaController::class,'guardar'])->name("guardar_categoria");

Route::match(['get','post'],'/categories/{id}/editar', [CategoriaController::class,'editar'])->name("editar_categoria");

Route::match(['get','post'],'/categories/{id}/eliminar', [CategoriaController::class,'eliminar'])->name("eliminar_categoria");

//##################################################################################################################################

//#####################      Productes     ########################################################################

Route::get('/productes', [ProducteController::class,'llistar'])->name("llistar_productes");

Route::match(['get','post'],'/productes/afegir', [ProducteController::class,'afegir'])->name("afegir_producte");
//Route::post('/productes/afegir', [ProducteController::class,'afegir'])->name("afegir_producte_save");

Route::match(['get','post'],'/productes/{id}/editar', [ProducteController::class,'editar'])->name("editar_producte");
//Route::post('/productes/{id}/editar', [ProducteController::class,'editar'])->name("editar_producte_save");

Route::get('/productes/{id}', [ProducteController::class,'fitxa'])->name("fitxa_producte");

Route::match(['get','post'],'/productes/{id}/eliminar', [ProducteController::class,'eliminar'])->name("eliminar_producte");

//##################################################################################################################################