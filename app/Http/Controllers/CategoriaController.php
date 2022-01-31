<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Http\Requests;

class CategoriaController extends Controller
{
    public function llistar()
    {
        $categories = Categoria::all();
        return view('categories/llistar', [
            'categories' => $categories
        ]);
    }

    public function afegir()
    {
        return view("categories/afegir");
    }

    public function editar(Request $request, $c)
    {
        $categoria = Categoria::where('id', $c)->first();
        if ($request->isMethod("POST")) {
            $validated = $request->validate([
                'nom' => ['required']
            ]);
            $nom = $validated['nom'];
            $categoria->nom = $nom;
            $categoria->save();
            return redirect()->route('llistar_categories');
        }


        return view("categories/editar", [
            'categoria' => $categoria
        ]);
    }
    public function guardar(Request $request)
    {

        $validated = $request->validate([
            'nom' => ['required']
        ]);
        $nom = $validated['nom'];
        $categoria = new Categoria();
        $categoria->nom = $request->nom;
        $categoria->save();
        return redirect()->route('llistar_categories');
    }

    public function eliminar(Request $request, $id)
    {
        $categoria = Categoria::where('id', $id)->first();
        if ($request->isMethod("POST")) {
            
            $categoria->delete();
            return redirect()->route('llistar_categories');
        }
        

        return view("categories/eliminar", [
            'categoria' => $categoria
        ]);
    }
}
