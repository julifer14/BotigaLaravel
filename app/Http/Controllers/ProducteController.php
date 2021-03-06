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

    public function llistat_public(){
        $productes = Producte::all();
        return view('productes/llistat_public',[
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
                'stock' => ['required'],
                'categoria' => ['required'],
                //'image' => ['required',"mimes : png , jpg , jpeg"]
            ]);
            
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images'), $imageName);

            $producte = new Producte();
            $producte->nom = $validated['nom'];
            $producte->descripcio = $validated['descripcio'];
            $producte->preu = $validated['preu'];
            $producte->stock = $validated['stock'];
            $producte->categoria_id = $validated['categoria'];
            $producte->image = $imageName;
            $producte->save();
            return redirect()->route('llistar_productes');
        }
        $categories = Categoria::all();

        return view("productes/afegir", [
            'categories' => $categories
        ]);
    }

    public function editar(Request $request,$id)
    {
        $producte = Producte::where('id', $id)->first();
        if ($request->isMethod("POST")) {
            $validated = $request->validate([
                'nom' => ['required'],
                'descripcio' => ['required'],
                'preu' => ['required'],
                'categoria' => ['required'],
                'stock'=>['required']
            ]);

            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images'), $imageName);

            
            $producte->nom = $validated['nom'];
            $producte->descripcio = $validated['descripcio'];
            $producte->preu = $validated['preu'];
            $producte->stock = $validated['stock'];
            $producte->image = $imageName;
            $producte->categoria_id = $validated['categoria'];
            $producte->save();
            return redirect()->route('llistar_productes');
        }
        $categories = Categoria::all();

        return view("productes/editar", [
            'categories' => $categories,
            'producte' => $producte
        ]);
    }


    public function eliminar(Request $request, $id)
    {
        $producte = Producte::where('id', $id)->first();
        if ($request->isMethod("POST")) {
            
            $producte->delete();
            return redirect()->route('llistar_productes');
        }

        return view("productes/eliminar", [
            'producte' => $producte
        ]);
    }
}
