<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producte;

class ProducteController extends Controller
{
    public function llistar()
    {
        $productes = Producte::all();
        return view('productes/llistar', [
            'productes' => $productes
        ]);
    }

    public function fitxa($id){
        $producte = Producte::where('id', $id)->first();

        return view('productes/fitxa',[
            'producte' => $producte
        ]);
    }
}
