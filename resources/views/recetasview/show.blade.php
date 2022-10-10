@extends('layouts.plantilla')

@section('title', $receta->name)

@section('content')

    <!-- bootstrap -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <h1>Esta es la receta: {{$receta->name}}</h1>
    
    <a href="{{route('recetas.index')}}">Volver a las recetas</a>
    
    <br>

    <a href="{{Route('recetas.edit', $receta)}}">Editar receta</a>

    <form action="{{Route('recetas.delete', $receta)}}" method="POST">
        @csrf
        @method('delete')
        <br>
        <button type="submit">Eliminar receta</button>
    </form>

    <p><strong>Categoria: </strong><br>{{$receta->categoria}}</p>
    <p><strong>Ingredientes: </strong><br>{{$receta->ingredientes}}</p>
    <p><strong>Preparación: </strong><br>{{$receta->preparacion}}</p>
@endsection
