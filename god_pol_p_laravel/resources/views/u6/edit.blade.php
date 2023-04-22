@extends('layouts/u6plantilla')

@section('titulo', 'Editar libros')

@section('contenido')

    <main>
        <div>
            <h2>Editar el apunte de la base de datos</h2>
        </div>

        <br>

        @if ($errors->any())
        <h3>Hay errores en los datos</h3>
        @endif


        <form action="{{ url('u6/' .$libreria->id) }}" method="post">

            @method("PUT")
            @csrf

            <label>Título:</label>
            <input type="text" name="titulo" id="titulo" value="{{ $libreria->titulo }}" required="required"><br />
            <label>Autor:</label>
            <input type="text" name="autor" id="autor" value="{{  $libreria->autor }}" required="required"><br />
            <label>Editorial:</label>
            <input type="text" name="editorial" id="editorial" value="{{ $libreria->editorial }}" required="required"><br />

            <input class="boton-formulario" type='submit' value='Enviar'>
            <button class="boton-formulario"><a href="{{ url('u6') }}">Volver al menú</a></button>


        </form>

    </main>
@endsection
