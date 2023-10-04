<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return 'HOME PAGE';
});

Route::get('productos', [ProductController::class,'listProducts']);
Route::get('productos/detalle', [ProductController::class,'detalle']);

//Route::get('productos/create', function ($id) {
//   return "Aqui va a estar el formulario para la creación de archivos";
//});

//Route::get('productos/{id}', function ($id) {
//   return "el nombre del producto es $id";
//});

//Route::get('productos/{id}/{categoria}', function ($id,$categoria) {
//    return "el nombre del producto es $id con la categoria $categoria";
//});
