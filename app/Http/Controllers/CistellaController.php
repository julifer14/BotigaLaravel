<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
}
