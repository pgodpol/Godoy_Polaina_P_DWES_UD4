<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibroController extends Controller
{

    public $libros = [
        ['titulo' => 'La Ilíada', 'autor' => 'Homero', 'editorial' => 'Editorial Gredos'],
        ['titulo' => 'La Divina Comedia', 'autor' => 'Dante Alighieri', 'editorial' => 'Alianza Editorial'],
        ['titulo' => 'Don Quijote de la Mancha', 'autor' => 'Miguel de Cervantes', 'editorial' => 'Castalia'],
        ['titulo' => 'Cien años de soledad', 'autor' => 'Gabriel García Márquez', 'editorial' => 'Sudamericana'],
        ['titulo' => 'Orgullo y Prejuicio', 'autor' => 'Jane Austen', 'editorial' => 'Penguin'],
    ];

    public function index()
    {
        foreach ($this->libros as $libro) {
            echo "<p>Título: {$libro['titulo']}</p>";
            echo "<p>Autor: {$libro['autor']}</p>";
            echo "<p>Editorial: {$libro['editorial']}</p>";
            echo "<br>";
        }
        echo "<a  href='./'>IR A LA PÁGINA DE ÍNDICE</a>";
    }
}
