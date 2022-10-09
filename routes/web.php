<?php

use App\Http\Controllers\RecetaController;
use Illuminate\Support\Facades\Route;
//para usar el controlador
use App\Http\Controllers\HomeControler;


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


//Rutas en laravel

//http://localhost/proyectoLaravel/public/
//Le digo que cuando un usuario ingresa al sito principal quiero que me devuelvas las vista "welcome"
Route::get('/', HomeControler::class);
    /* //para laravel 7
Route::get('/', 'HomeControler') */;


//en este metodo solo se aceptan rutas de RecetaController
Route::controller(RecetaController::class)->group(function () {
    
    //http://localhost/proyectoLaravel/public/recetasview
    //hace referencia a recetasview y el metodo encargado de admistrar es index, le llamamos como nombre identificativo: metodo name('recetas.index') y este name lo usaremos en el html href="{{route('recetas.create')}}" 
    Route::get('recetasview', 'index')->name('recetas.index');//('nombre url') ->name('name view')

    //http://localhost/proyectoLaravel/public/recetasview/create
    Route::get('recetasview/create', 'create')->name('recetas.create'); //('nombre url') ->name('name view')

    //ruta que se encaraga de recibir el formulario
    Route::post('recetasview', 'store')->name('recetas.store');

    //http://localhost/proyectoLaravel/public/recetasview/5
    Route::get('recetasview/{receta}', 'show')->name('recetas.show');

    //http://localhost/proyectoLaravel/public/recetasview/1/edit
    Route::get('recetasview/{receta}/edit', 'edit')->name('recetas.edit');

    //http://localhost/proyectoLaravel/public/recetasview/1/update
    Route::put('recetasview/{receta}/update', 'update')->name('recetas.update');

    //ruta para eliminar un curso
    Route::delete('recetasview/{receta}', 'delete')->name('recetas.delete');
});

//ejemplo de ruta directo sin metodo
//Route::post('recetas', [RecetaController::class, 'store'])->name('recetas.store');



//http://localhost/proyectoLaravel/public/recetas/pruebarecta/receta
/* Route::get('recetas/{receta}/{categoria}', function ($receta, $categoria) {

    //esto asi estaria ensuciando el codigo y habria que derivarlo a un controlador
    if($categoria){
        return "Bienvenido a la receta: $receta, de la categoria $categoria";
    }else{
        return "Bienvenido a la receta: $receta";
    }
    
}); */
