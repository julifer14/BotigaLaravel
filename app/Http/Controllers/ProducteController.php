<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producte;
use App\Models\Categoria;

class ProducteController extends Controller
{
    public function llistar()
    {
        $productes = Producte::all();
        return view('productes/llistar', [
            'productes' => $productes
        ]);
    }

    public function fitxa($id)
    {
        $producte = Producte::where('id', $id)->first();

        return view('productes/fitxa', [
            'producte' => $producte
        ]);
    }

    public function afegir(Request $request)
    {
        if ($request->isMethod("POST")) {
            $validated = $request->validate([
                'nom' => ['required'],
                'descripcio' => ['required'],
                'preu' => ['required'],
                'categories' => ['required'],
            ]);
            $producte = new Producte();
            $producte->nom = $validated['nom'];
            $producte->descripcio = $validated['descripcio'];
            $producte->preu = $validated['preu'];
            $producte->categoria_id = $validated['categories'];
            $producte->save();
            return redirect()->route('llistar_productes');
        }
        $categories = Categoria::all();

        return view("productes/afegir", [
            'categories' => $categories
        ]);
    }
}
