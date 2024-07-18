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

        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Manejar la carga de la imagen
        if ($request->hasFile('imagen')) {
            $fileName = time() . '.' . $request->imagen->extension();
            $request->imagen->move(public_path('images'), $fileName);
        } else {
            $fileName = null;
        }
    
        $equipo = new Equipo();
        $equipo->nombre = $validatedData['nombre'];
        $equipo->imagen = $fileName;
        $equipo->save();
    
        return redirect('/equipos');
       


    }
    public function show($equipo){
        $equipo = Equipo::find($equipo);
        return view('equipos.show', compact('equipo'));
       
    }
}

