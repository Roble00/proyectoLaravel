@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')

    <!-- bootstrap -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <h1>Bienvenidos a las recetas de casa</h1>
    <a href="{{route('recetas.index')}}">Acceder</a> <!-- apunta al name('recetas.index') -->

@endsection()