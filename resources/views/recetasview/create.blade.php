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
        @error('name')
            <br>
            <small>*{{$message}}</small> <!-- tambien funciona asi *{{"Campo requerido"}} -->
            <br>
        @enderror
        <br>
        <label>
            Categoria:
            <br>
            <input type="text" name="categoria">
        </label>
        <br>
        <label>
            Ingredientes:
            <br>
            <textarea name="ingredientes" rows="5"></textarea>
        </label>
        @error('ingredientes')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <br>
        <label>
            Preparación:
            <br>
            <textarea name="preparacion" rows="5"></textarea>
        </label>
        @error('preparacion')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <button type="submit">Guardar receta</button>
    </form>
    <br>
    <a href="{{route('recetas.index')}}">Volver a las recetas</a>
@endsection
