<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;

class equiposController extends Controller
{
    public function index()
    {
        $equipos = Equipo::all();
        return view('user.content',  ['equipos'=>$equipos]);
    }
}
