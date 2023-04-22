<?php

namespace App\Http\Controllers;

use App\Models\Libreria;
use Illuminate\Http\Request;

class LibreriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $librerias = Libreria::all();
        return view('u6.index', ['librerias' => $librerias]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('u6/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'titulo' => 'required|max:150',
            'autor' => 'required|max:100',
            'editorial' => 'required|max:100',

        ]);

        $libreria = new Libreria();
        $libreria->titulo = $request->input('titulo');
        $libreria->autor = $request->input('autor');
        $libreria->editorial = $request->input('editorial');

        $libreria->save();

        return view("u6.mensaje",['msg'=> "Registro guardado correctamente"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Libreria $libreria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $libreria = Libreria::find($id);
        return view('u6.edit', ['libreria'=> $libreria]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {


        $request->validate([
            'titulo' => 'required|max:150',
            'autor' => 'required|max:100',
            'editorial' => 'required|max:100',

        ]);

        $libreria = Libreria::find($id);
        $libreria->titulo = $request->input('titulo');
        $libreria->autor = $request->input('autor');
        $libreria->editorial = $request->input('editorial');

        $libreria->save();

        return view("u6.mensaje", ['msg' => "Registro editado correctamente"]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $libreria = Libreria::find($id);
        $libreria->delete();

        return redirect("u6");

    }
}
