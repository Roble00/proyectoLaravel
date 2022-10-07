@extends('layouts.plantilla')

@section('title', $receta->name)

@section('content')
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

    <p><strong>Categoria: </strong>{{$receta->categoria}}</p>
    <p><strong>Ingredientes: </strong>{{$receta->ingredientes}}</p>
@endsection
