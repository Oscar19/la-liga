<?php

namespace App\Http\Controllers;
use App\Models\Partido;
use Illuminate\Http\Request;

class PartidoController extends Controller
{
    public function index(){

        $partidos = Partido::all();

        return view('partidos.index', compact('partidos'));
    }
}
