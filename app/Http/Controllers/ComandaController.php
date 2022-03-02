<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comanda;
class ComandaController extends Controller
{
    
    public function llistar()
    {
        $comandes = Comanda::all();
        return view('comandes/llistar', [
            'comandes' => $comandes
        ]);
    }

}
