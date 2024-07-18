<?php

namespace App\Http\Controllers;
use App\Models\Equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    public function index(){

        $equipos = Equipo::all();

        return view('equipos.index', compact('equipos'));
    }
    public function create(){

        return view('equipos.create');
    }
    public function store(){
        
    }
    public function show(){

        $equipos = Equipo::all();

        return view('equipos.create');
    }
}
