<?php

use App\Http\Controllers\AppleController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TallerController;
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
    return view('welcome');
});

//Route::get('/curso/{dato1}/{dato2}',[CursoController::class,'hola'])->name('curso.show');

//Route::get('/curso',[CursoController::class,'create']);
//Route::post('/curso',[CursoController::class,'store'])->name('curso.store');

// Route::get('/tallerprimo',[ProductController::class,'create']);
// Route::post('/tallerprimo/verificar',[ProductController::class,'esPrimo'])->name('taller.esPrimo');

Route::get('/frmproducto',[ProductController::class,'formularioProducto']);
Route::post('/frmproducto-store',[ProductController::class,'productoStore'])->name('product.store');

Route::get('/frmapple',[AppleController::class,'formularioapple']);
Route::post('/frmpple-store',[AppleController::class,'AppleStore'])->name('apple.store');