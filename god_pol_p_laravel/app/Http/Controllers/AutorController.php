<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutorController extends Controller
{

    public $autor = [
        ['nombre' => 'Gabriel García Márquez', 'nacionalidad' => 'Nacionalidad A', 'libros' => 'Título A'],
        ['nombre' => 'Miguel de Cervantes', 'nacionalidad' => 'Nacionalidad A', 'libros' => 'Título B'],
    ];

    public function index()
    {
        foreach ($this->autor as $autor) {
            echo "<p>Nombre: {$autor['nombre']}</p>";
            echo "<p>Nacionalidad: {$autor['nacionalidad']}</p>";
            echo "<p>Libros: {$autor['libros']}</p>";
            echo "<br>";
        }
        echo "<a href='./'>IR A LA PÁGINA DE ÍNDICE</a>";
    }
}
