<?php

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


//1 - crea una ruta get /articulos que muestre todas las articulos



//crea una ruta get /articulos/create que vaya a un formulario para crear una nueva monografia


// crea una ruta post /articulos que guarde la nueva monografia


//crea la ruta get /articulos/{articulo} que muestre la monografia



//crea la ruta get /articulos/{articulo}/edit que lleve a un formulario


//crtea ruta tipo put /articulos/{articulo} que guarde la mopnografia modificada (update)



//  crea la ruta tipo delete /articulos/{articulo} que borre la monografia









require __DIR__.'/auth.php';

