@extends('layouts/u6plantilla')

@section('titulo', 'Libreria')

@section('contenido')

    <main>

        <h2>Listado de Libros</h2>

        <nav class="menu">
            <a class="boton-menu"  href="../">Índice general</a>
            <a class="boton-menu" href="{{ url('u6/create') }}">Nuevo registro</a>
        </nav>

        <h2 class="texto-cabecera">Tabla con el contenido de la base de datos</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Autor</th>
                    <th>Editorial</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($librerias as $libreria)
                    <tr>
                        <td>{{ $libreria->id }}</td>
                        <td>{{ $libreria->titulo }}</td>
                        <td>{{ $libreria->autor }}</td>
                        <td>{{ $libreria->editorial }}</td>
                        <td class="boton-formulario"><a href="{{ url('u6/' . $libreria->id . '/edit') }}">Editar</a></td>
                        <td>
                            <form action="{{ url('u6/' . $libreria->id) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="boton-formulario">Borrar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>


    </main>

@endsection
