
@extends('layouts/u3plantilla')

@section('titulo', 'Acerca de nosotros')

@section('contenido')

<h1>ESTA ES LA PÁGINA DE LIBROS DEL EJERCICIO 3</h1>
<br>

<?php

foreach ($var_libros as $libro) {
    echo "<p>Título: {$libro['titulo']}</p>";
    echo "<p>Autor: {$libro['autor']}</p>";
    echo "<p>Editorial: {$libro['editorial']}</p>";
    echo '<br>';
}
?>



<br>
<div class="centrar">
<a class="boton-formulario" href='../'>IR A LA PÁGINA DE ÍNDICE GENERAL</a>
<a class="boton-formulario" href='../u3/indice'>IR A LA PÁGINA DE ÍNDICE DEL EJERCICIO 3</a>
</div>
@endsection
