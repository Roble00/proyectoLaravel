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


//en este metodo solo se aceptan rutas de CursoController
Route::controller(RecetaController::class)->group(function () {
    //http://localhost/proyectoPrueba/public/cursos
    Route::get('recetas', 'index')->name('recetas.index');

    //http://localhost/proyectoPrueba/public/cursos/create
    Route::get('recetas/create', 'create')->name('recetas.create'); //('nombre url') ->name('name view')

    //ruta que se encaraga de recibir el formulario
    Route::post('recetas', 'store')->name('recetas.store');

    //http://localhost/proyectoPrueba/public/cursos/5
    Route::get('recetas/{receta}', 'show')->name('recetas.show');

    //http://localhost/proyectoPrueba/public/cursos/1/edit
    Route::get('recetas/{receta}/edit', 'edit')->name('recetas.edit');

    //http://localhost/proyectoPrueba/public/cursos/1/update
    Route::put('recetas/{receta}/update', 'update')->name('recetas.update');

    //ruta para eliminar un curso
    Route::delete('recetas/{receta}', 'delete')->name('recetas.delete');
});

//ejemplo de ruta directo sin metodo
//Route::post('cursos', [CursoController::class, 'store'])->name('cursos.store');



//http://localhost/proyectoPrueba/public/cursos/java/programacion
/* Route::get('cursos/{curso}/{categoria}', function ($curso, $categoria) {

    //esto asi estaria ensuciando el codigo y habria que derivarlo a un controlador
    if($categoria){
        return "Bienvenido al curso: $curso, de la categoria $categoria";
    }else{
        return "Bienvenido al curso: $curso";
    }
    
}); */
