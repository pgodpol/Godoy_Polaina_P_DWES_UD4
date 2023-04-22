@extends('layouts/u6plantilla')

@section('titulo', 'Registrar libros')

@section('contenido')

    <main>
        <div>
            <h2>Registrar nuevo libro</h2>
        </div>

        <p>Formulario para insertar nueva película o disco</p>
        <br>

        @if ($errors->any())
        <h3>Hay errores en los datos introducidos</h3>
        @endif


        <form action="{{ url('u6') }}" method="post">

            @csrf

            <label>Título:</label>
            <input type="text" name="titulo" id="titulo" value="{{ old('titulo') }}" required="required"><br />
            <label>Autor:</label>
            <input type="text" name="autor" id="autor" value="{{ old('autor') }}" required="required"><br />
            <label>Editorial:</label>
            <input type="text" name="editorial" id="editorial" value="{{ old('editorial') }}" required="required"><br />

            <input class="boton-formulario" type='submit' value='Enviar'>
            <button class="boton-formulario"><a href="{{ url('u6') }}">Volver al menú</a></button>


        </form>

    </main>
@endsection
