@extends('layouts.plantilla')

@section('title', 'Cursos')

@section('content')

    <!-- bootstrap -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <h1>Pagina principal de recetas</h1>
    <a href="{{route('recetas.create')}}">Crear receta</a>
    <ul>
        @foreach($recetas as $receta)
        <li>
            <a href="{{route('recetas.show', $receta->id)}}">{{$receta->name}}</a>
            {{--{{route('recetas.show', $receta->id)}} --}} <!-- devuelve id http://localhost/proyectoPrueba/public/cursos/1 -->
            {{--{{route('recetas.show', 'abc')}} --}} <!-- devuelve id http://localhost/proyectoPrueba/public/cursos/abc -->
            {{--{{$receta->name}}--}}
        
        </li>
        @endforeach
    </ul>

    {{$recetas->links()}}

@endsection


<!-- equivale al codigo de arriba que genera la vista mediante la plantilla blade -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
</body>
</html> -->