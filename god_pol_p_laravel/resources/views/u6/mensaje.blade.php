@extends('layouts/u6plantilla')

@section('titulo', 'Mensaje')

@section('contenido')

    <main>
        <div>
            <h2>{{ $msg }}</h2>
            <a class="boton-formulario" href="{{ url('u6') }}">Volver al menú</a>
        </div>
    </main>
@endsection
