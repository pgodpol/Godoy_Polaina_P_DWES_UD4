@extends('layouts.app')

@section('title', 'Obras')

@section('content')

    <nav class="menu">
      <a class="boton-formulario" href="../">Índice general</a>
      <a class="boton-formulario" href='{{ route("inicio") }}'>Inicio ejercicio 4</a>
      Películas y discos
      <a class="boton-formulario" href='{{ route("anadir") }}'>Añadir obras</a>
      <a class="boton-formulario" href='{{ route("borrar") }}'>Borrar registro</a>
    </nav>

    <h2>Obras: peliculas y discos</h2>

    <p>Peliculas y discos insertados en la base de datos.</p>

    @if (count($obras) > 0)

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tipo</th>
                    <th>Título</th>
                    <th>Artista</th>
                    <th>Lanzamiento</th>
                    <th>Género</th>
                    <th>Duración</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($obras as $obra)
                    <tr>
                        <td>{{ $obra->id }}</td>
                        <td>{{ $obra->tipo }}</td>
                        <td>{{ $obra->titulo }}</td>
                        <td>{{ $obra->artista }}</td>
                        <td>{{ $obra->lanzamiento }}</td>
                        <td>{{ $obra->genero }}</td>
                        <td>{{ $obra->duracion }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    @else

        <p>¡No hay obras añadidas actualmente!</p>

    @endif

@endsection
