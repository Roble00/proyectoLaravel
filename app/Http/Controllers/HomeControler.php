<?php

//definir en el lugar donde se encuentra el archivo
namespace App\Http\Controllers;

use Illuminate\Http\Request;

//aqui es donde vamos a escribir los metodos para administrar nuestras rutas
class HomeControler extends Controller
{
    public function __invoke(){
        //return view('Bienvenido a la pagina principal');
        //return "Bienvenido a la pagina principal";
        //return view('welcome');//esta es por defecto
        return view('home');
        
        
        //return view('prueba');//prueba bootstrap
    }
}
