<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\libros;

class LibrosController extends Controller
{
    public function crear ()
    {
        return view('libros.crear');
    }

    public function leer ()
    {
        $libros = Libros::all();
        return view('libros.leer', compact('libros'));
    }

    public function eliminar ()
    {
        $libros = Libros::all();
        return view('libros.eliminar', compact('libros'));
    }

    public function update (Request $request, Libros $libro)
    {
        $request->validate([
            'nombre'=>'required|string|max:255',
            'descripcion'=>'required|string',
            'autor'=>'required|string|max:255',
        ]);

        $libro -> update($request->all());
        return redirect()->back()->with('success', 'libro atualizado con exito');
    }

    public function store(Request $request){
        $request->validate([
            'nombre'=>'required|string|max:255',
            'descripcion'=>'required|string',
            'autor'=>'required|string|max:255',
        ]);
        $libro = new libros();
        $libro->nombre = $request->nombre;
        $libro->descripcion = $request->descripcion;
        $libro->autor = $request->autor;

        $libro->save();

        return redirect()->back()->with('success', 'libro creado con exito');
    }

    public function destroy(Request $request) {
        $Id = $request->input('IdLibro');
        $libro = Libros::find($Id);
        if($libro){
            $libro->delete();
            return redirect()->back()->with('success', 'libro borrado con exito');
        } else {
            return redirect()->back()->with('success', 'libro no encontrado');
        }
    }
}
