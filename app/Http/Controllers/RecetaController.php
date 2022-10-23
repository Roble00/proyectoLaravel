<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receta;

class RecetaController extends Controller
{
    //metodo para mostrar la pagina principal......prueba feature/#2 prueba feature/#2
    public function index()
    {
        $recetas = Receta::orderBy('id', 'desc')->paginate(); //para capturar todas las recetas de la BBDD por paginas ordenado por id con orden descendente, asi mostramos las nuevos los primeros
        return view('recetasview.index', compact('recetas')); //se posiciona en la carpeta view()
    }

    //este metodo es el create

    //metodo para mostrar el formulario para crear una receta
    public function create()
    {
        return view('recetasview.create');
    }


    //metodo que se encaraga de recibir el formulario
    public function store(Request $request)
    { //con Request capturamos los datos introducidos en el form

        $request->validate([
            'name' => 'required',
            'ingredientes' => 'required',
            'preparacion' => 'required'
        ]);

        $receta = new Receta();

        $receta->name = $request->name;
        $receta->categoria = $request->categoria;
        $receta->ingredientes = $request->ingredientes;
        $receta->preparacion = $request->preparacion;
        
        $receta->save(); //guardamos en la bbdd

        //return view('recetas.show', compact('receta'));//asi funciona tambien
        return redirect()->route('recetas.show', $receta);
    }


    //metodo para mostrar una receta en particular (por id), Este metodo se puede modificar como edit (lo conservo como ej)
    public function show($receta)
    {

        $receta = Receta::find($receta); //para recuperar un registro por su id

        return view('recetasview.show', compact('receta')); //retorno el objeto receta

    }


    //metodo para mostrar el objeto Receta
    public function edit(Receta $receta)
    {
        return view('recetasview.edit', compact('receta'));
    }


    //metodo para mostrar el objeto Receta
    public function update(Request $request, Receta $receta)
    {
        $receta->name = $request->name;
        $receta->categoria = $request->categoria;
        $receta->ingredientes = $request->ingredientes;
        $receta->preparacion = $request->preparacion;

        $receta->save();//guardamos la actualizacion

        return view('recetasview.show', compact('receta'));//retornamos la vista show
    }


    //metodo para eliminar
    public function delete(Receta $receta){
        $receta->delete();
        return redirect()->route('recetas.index');
    }
}
