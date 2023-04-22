@extends('layouts.app')

@section('title', 'Borrar registro')

@section('content')

    <nav class="menu">
      <a class="boton-formulario"  href="../">Índice general</a>
      <a class="boton-formulario"  href='{{ route("inicio") }}'>Inicio ejercicio 4</a>
      <a class="boton-formulario"  href='{{ route("obras") }}'>Películas y discos</a>
      <a class="boton-formulario"  href='{{ route("anadir") }}'>Añadir obras</a>
      Borrar registro
    </nav>

    <h2>Borrar un registro de la base de datos</h2>

    <p>Inserta el ID del registro a eliminar</p>
    <br>

<form method='get' action='{{ url("u4") }}'>
    @csrf
    <label>ID:</label>
    <input type='number' name='id' value="{{ old('id') }}" required='required'><br />
    <br />

    <input class="boton-formulario"  type='submit' value='Enviar'>
</form>

@endsection
