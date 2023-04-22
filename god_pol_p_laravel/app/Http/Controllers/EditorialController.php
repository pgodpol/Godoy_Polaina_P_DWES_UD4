<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditorialController extends Controller
{

public $editorial = [
        ['nombre' => 'Editorial Gredos', 'ubicacion' => 'Población A', 'libros' => 'Título A'],
        ['nombre' => 'Alianza Editorial', 'ubicacion' => 'Población B', 'libros' => 'Título B'],
    ];
    public function index()
    {
        foreach ($this->editorial as $editorial) {
            echo "<p>Nombre: {$editorial['nombre']}</p>";
            echo "<p>Ubicación: {$editorial['ubicacion']}</p>";
            echo "<p>Libros: {$editorial['libros']}</p>";
            echo "<br>";
        }
        echo "<a href='./'>IR A LA PÁGINA DE ÍNDICE</a>";
    }
}
