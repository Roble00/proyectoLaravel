<?php

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

//http://localhost/proyectoLaravel/public/
//Le digo que cuando un usuario ingresa al sito principal quiero que me devuelvas las vista "welcome"
Route::get('/', HomeControler::class);


//http://localhost/proyectoLaravel/public/cursos
Route::get('cursos', function () {
    return "Bienvenido a la pagina cursos";
});


//http://localhost/proyectoLaravel/public/cursos/create
Route::get('cursos/create', function () {
    return "En esta página podrás crear un curso";
});


//al colocar este metodo arriba de http://localhost/proyectoLaravel/public/cursos/create no funcionaria el http://localhost/proyectoLaravel/public/cursos/create
//http://localhost/proyectoLaravel/public/cursos/java
/* Route::get('cursos/{curso}', function ($curso) {
    return "Bienvenido al curso: " . $curso;
}); */



Route::get('cursos/{curso}/{categoria}', function ($curso, $categoria) {

    //esto asi estaria ensuciando el codigo y habria que derivarlo a un controlador
    if($categoria){
        return "Bienvenido al curso: $curso, de la categoria $categoria";
    }else{
        return "Bienvenido al curso: $curso";
    }

    
});

