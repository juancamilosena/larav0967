<?php

use App\Http\Controllers\amigosController;
use App\Http\Controllers\AppleController;
use App\Http\Controllers\cuadratica;
use App\Http\Controllers\cuadraticaController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\primosController;
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

Route::get('/frmprimos',[primosController::class,'mos']);
Route::post('/frmprimos-valor',[primosController::class,'primo'])->name('num.primo');

Route::get('/frmamigos',[amigosController::class,'form']);
Route::post('/frmamigos-valor',[amigosController::class,'ami'])->name('numero.amigo');


Route::get('/frmcuadratica',[cuadraticaController::class,'cuadratica']);
Route::post('/frmcuadratica-valor',[cuadraticaController::class,'rais'])->name('cuadratica.valor');


Route::get('/frmproducto',[ProductController::class,'formularioProducto']);
Route::post('/frmproducto-store',[ProductController::class,'productoStore'])->name('product.store');

Route::get('/frmapple',[AppleController::class,'formularioapple']);
Route::post('/frmpple-store',[AppleController::class,'AppleStore'])->name('apple.store');

Route::get('/frmPagina',[PaginaController::class,'formularioPagina']);
Route::post('/frmpagina-store',[PaginaController::class,'¨PaginaStore'])->name('Pagina.store');