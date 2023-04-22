<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ObraController extends Controller
{
    public function home()
    {
        return view('u4.inicio');
    }

    public function obras()
    {
        $obras = DB::table('obras')->get();

        return view('u4.obras', ['obras' => $obras]);
    }

    public function create()
    {
        return view('u4.insertar');
    }

    public function borrar()
    {
        return view('u4.borrar');
    }


    public function destroy(Request $request)
    {
        $id = $request->input('id');
        $obra = DB::table('obras')->find($id);

        DB::table('obras')->where('id', '=', $id)->delete();
        return view('u4.borrar');
    }

    public function store(Request $request)
    {
        DB::table('obras')->insert([
            'tipo' => $request->input('tipo'),
            'titulo' => $request->input('titulo'),
            'artista' => $request->input('artista'),
            'lanzamiento' => $request->input('lanzamiento'),
            'genero' => $request->input('genero'),
            'duracion' => $request->input('duracion'),
        ]);

        return redirect()->route('inicio');
    }

}
