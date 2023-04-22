<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class U3_LibroController extends Controller
{


    public function u3_libros()
    {

    $libros = [
        ['titulo' => 'La Ilíada', 'autor' => 'Homero', 'editorial' => 'Editorial Gredos'],
        ['titulo' => 'La Divina Comedia', 'autor' => 'Dante Alighieri', 'editorial' => 'Alianza Editorial'],
        ['titulo' => 'Don Quijote de la Mancha', 'autor' => 'Miguel de Cervantes', 'editorial' => 'Castalia'],
        ['titulo' => 'Cien años de soledad', 'autor' => 'Gabriel García Márquez', 'editorial' => 'Sudamericana'],
        ['titulo' => 'Orgullo y Prejuicio', 'autor' => 'Jane Austen', 'editorial' => 'Penguin'],
    ];
       return view('u3.libros', ['var_libros' => $libros]);
    }

    public function u3_indice(){
        return view('u3.indice');
    }

    public function u3_contacto()
    {
        return view('u3.contacto');
    }

    public function u3_acercade()
    {
        return view('u3.acercade');
    }

}
