@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')
    <h1>Pagina principal de recetas de cocina</h1>
    <a href="{{route('recetas.index')}}">Acceder</a>
@endsection()