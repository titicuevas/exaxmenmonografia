<?php

use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\MonografiaController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//1 - crea una ruta get /monografias que muestre todas las monografias

Route::get('/monografias', [MonografiaController::class,'index'])->name('monografias.index');

//crea una ruta get /monografias/create que vaya a un formulario para crear una nueva monografia

Route::get('/monografias/create', [MonografiaController::class,'create'])->name('monografias.create');

// crea una ruta post /monografias que guarde la nueva monografia

Route::post('/monografias/', [MonografiaController::class,'store'])->name('monografias.store');

//crea la ruta get /monografias/{monografia} que muestre la monografia

Route::get('/monografias/{monografia}', [MonografiaController::class,'show'])
->name('monografias.show');


//crea la ruta get /monografias/{monografia}/edit que lleve a un formulario

Route::get('/monografias/{monografia}/edit', [MonografiaController::class,'edit'])
    ->name('monografias.edit');

//crtea ruta tipo put /monografias/{monografias} que guarde la mopnografia modificada (update)

Route::put('/monografias/{monografia}', [MonografiaController::class,'update'])
->name('monografias.update');


//  crea la ruta tipo delete /monografias/{monografia} que borre la monografia

Route::delete('/monografias/{monografia}', [MonografiaController::class,'destroy'])
->name('monografias.destroy');

//Route::resource('articulos',ArticuloController::class);
//Route::resource('articulos',ArticuloController::class);
//1 - crea una ruta get /articulos que muestre todas las articulos

//Route::get('/articulos', ArticuloController::class,'index')->name('articulos.index');
Route::get('/articulos', [ArticuloController::class,'index'])->name('articulos.index');

//crea una ruta get /articulos/create que vaya a un formulario para crear una nueva monografia

Route::get('/articulos/create',[ArticuloController::class,'create'])->name('articulos.create');
// crea una ruta post /articulos que guarde la nueva monografia

Route::post('/articulos', [ArticuloController::class,'store'])->name('articulos.store');


//crea la ruta get /articulos/{articulo} que muestre la monografia
Route::get('/articulos/{articulo}',[ArticuloController::class,'show'])->name('articulos.show');


//crea la ruta get /articulos/{articulo}/edit que lleve a un formulario

Route::get('/articulos/{articulo}/edit',[ArticuloController::class,'edit'])->name('articulos.edit');
//crtea ruta tipo put /articulos/{articulo} que guarde la mopnografia modificada (update)

Route::put('/articulos/{articulo}',[ArticuloController::class,'update'])->name('articulos.update');

//  crea la ruta tipo delete /articulos/{articulo} que borre la monografia
Route::delete('/articulo/{articulo}',[ArticuloController::class,'destroy'])->name('articulos.destroy');


/* Este es el resourse de autores que nesesita modificar los parametros
 (ya que el singular de autores es autore), pero todo lo demas es igual
 --en el modelo tambien nesesita llamar correctamente a la tabla ya que ek modelo
 es Autor y la tabla autores (protedted $table = 'autores' )
  */




  
Route::resource('autores',AutorController::class)->parameters(['autores'=>'autor']);




require __DIR__.'/auth.php';

