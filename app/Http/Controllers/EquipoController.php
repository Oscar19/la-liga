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
    public function store(Request $request){

        $equipo = new Equipo();
        $equipo->nombre = $request->nombre;
        $equipo->save();
        return redirect('/equipos');
       


    }
    public function show($equipo){
        $equipo = Equipo::find($equipo);
        return view('equipos.show', compact('equipo'));
       
    }
}

