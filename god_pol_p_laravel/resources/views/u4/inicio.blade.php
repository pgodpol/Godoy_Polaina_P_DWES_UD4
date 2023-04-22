@extends('layouts.app')

@section('title', 'Inicio')

@section('content')


    <nav class="menu">
      <a class="boton-formulario" href="../">Índice general</a>
      Inicio ejercicio 4
      <a class="boton-formulario"  href='{{ route("obras") }}'>Películas y discos</a>
      <a class="boton-formulario"  href='{{ route("anadir") }}'>Añadir obras</a>
      <a class="boton-formulario"  href='{{ route("borrar") }}'>Borrar registro</a>


    </nav>

    <h2>Inicio</h2>

    <p>Web de ejemplo que muestra y añade obras como peliculas y discos en una base de datos.</p>

@endsection
