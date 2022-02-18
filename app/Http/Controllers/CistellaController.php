<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Producte;
use App\Models\LiniaCistella;

class CistellaController extends Controller
{
    public function mostrar_cistella()
    {
        $user = Auth::user();
        //dump($user->cistella);
        //dump($user->cistella->liniaCistella);
        return view('cistella/mostrar_cistella', [
            'cistella' => $user->cistella
        ]);
    }

    public function eliminar(Request $request, $linia_id)
    {
        //$cistella = Cistella::where('id', $cistella_id)->first();
        $linia = LiniaCistella::where('id', $linia_id)->first();
        if (Auth::user()->id == $linia->cistella->user->id) {





            $linia->delete();
            return redirect()->route('mostrar_cistella');
        }
    }

    public function afegir(Request $request, $producte_id)
    {
        $user = Auth::user();
        $producte = Producte::where('id', $producte_id)->first();

        $linia = new LiniaCistella();
        $linia->quantitat = 1;
        $linia->cistella_id = $user->cistella_id;
        $linia->producte_id = $producte_id;
        $linia->save();
        return redirect()->route('llistat_productes_public');

        // $cistella->
    }
}
