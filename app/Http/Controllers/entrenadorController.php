<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entrenador;

class entrenadorController extends Controller
{
    public function index()
    {
        $entrenadores = Entrenador::all();
        return view('user.entrenador',  ['entrenador'=>$entrenadores]);
    }
}
