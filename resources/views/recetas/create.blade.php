@extends('layouts.plantilla')

@section('title', 'Recetas create')

@section('content')
    <h1>En esta pagina podras crear una receta</h1>

    <!-- para ver el resultado de route = http://localhost/proyectoPrueba/public/cursos -->
    {{-- {{route('recetas.store')}} --}}

    <!-- con el POST seleccionamos que queremos usar en web.php el metodo -> Route::post('cursos', 'store')->name('cursos.store'); -->
    <form action="{{route('recetas.store')}}" method="POST">
        
        @csrf
        
        <label>
            Nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br>
        <label>
            Ingredientes:
            <br>
            <textarea name="ingredientes" rows="5"></textarea>
        </label>
        <br>
        <label>
            Categoria:
            <br>
            <input type="text" name="categoria">
        </label>
        <br>
        <button type="submit">Guardar receta</button>
    </form>
@endsection
