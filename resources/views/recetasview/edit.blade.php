@extends('layouts.plantilla')

@section('title', 'Recetas edit')

@section('content')
    <h1>En esta pagina podras editar una receta</h1>

    <!-- para ver el resultado de route = http://localhost/proyectoPrueba/public/cursos -->
    {{-- {{route('recetas.store')}} --}}

    <!-- con el POST seleccionamos que queremos usar en web.php el metodo -> Route::post('cursos', 'store')->name('cursos.store'); -->
    <form action="{{route('recetas.update', $receta)}}" method="POST">
        
        @csrf

        @method('put')
        
        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{$receta->name}}">
        </label>
        <br>
        <label>
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{$receta->categoria}}">
        </label>
        <br>
        <label>
            Ingredientes:
            <br>
            <textarea name="ingredientes" rows="5">{{$receta->ingredientes}}</textarea>
        </label>
        <br>
        <br>
        <label>
            Preparación:
            <br>
            <textarea name="preparacion" rows="5">{{$receta->preparacion}}</textarea>
        </label>
        <br>

        <button type="submit">Actualizar receta</button>
    </form>

    <a href="{{route('recetas.show', $receta->id)}}">Volver a la receta</a>
@endsection
