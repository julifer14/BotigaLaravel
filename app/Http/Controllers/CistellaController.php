<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Cistella;
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

    public function eliminar(Request $request, $cistella_id, $producte_id)
    {
        $cistella = Cistella::where('id', $cistella_id)->first();
        if (Auth::user()->id == $cistella->user->id) {
            $linia = LiniaCistella::where('producte_id', $producte_id)->first();

            $linia->delete();
            return redirect()->route('mostrar_cistella');
        }
    }
}
