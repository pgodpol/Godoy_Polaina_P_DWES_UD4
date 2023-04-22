@extends('layouts.app')

@section('title', 'Insertar')

@section('content')

    <nav class="menu">
      <a class="boton-formulario" href="../">Índice general</a>
      <a class="boton-formulario" href='{{ route("inicio") }}'>Inicio ejercicio 4</a>
      <a class="boton-formulario" href='{{ route("obras") }}'>Películas y discos</a>
      Añadir obras
      <a class="boton-formulario" href='{{ route("borrar") }}'>Borrar registro</a>

    </nav>

    <h2>Insertar una nueva obra: Película o disco</h2>

    <p>Formulario para insertar nueva película o disco</p>
    <br>

    <form method='post' action='{{ route("insertar") }}'>
        @csrf
        <label>Tipo:</label>
        <input type='text' name='tipo' required='required'><br />
        <label>Título:</label>
        <input type='text' name='titulo' required='required'><br />
        <label>Artista:</label>
        <input type='text' name='artista' required='required'><br />
        <label>Lanzamiento:</label>
        <input type='date' name='lanzamiento' required='required'><br />
        <label>Género:</label>
        <input type='text' name='genero' required='required'><br />
        <label>Duración:</label>
        <input type='number' name='duracion' required='required'><br /><br />
        <input class="boton-formulario" type='submit' value='Enviar'>
    </form>

@endsection
