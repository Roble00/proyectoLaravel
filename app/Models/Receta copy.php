<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    use HasFactory;

    //////////////////////////////////////////////////////////////////////////////////////

    //protected $table = "users";//asignar un modelo a una tabla sin uso de la convencion
        //metodo para mostrar la pagina principal......prueba feature/#2 prueba feature/#2
        public function index()
        {
            $recetas = Receta::orderBy('id', 'desc')->paginate(); //para capturar todas las recetas de la BBDD por paginas ordenado por id con orden descendente, asi mostramos las nuevos los primeros
            return view('recetasview.index', compact('recetas')); //se posiciona en la carpeta view()
        }
}
