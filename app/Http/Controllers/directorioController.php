<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\directorio;

class directorioController extends Controller
{
    //

    public function homeDirectorios(){
        $directorios = directorio::all();
        return view('directorio', compact('directorios'));
    }

    public function crearEntrada(){
        return view('crearEntrada');
    }

    public function buscarEntrada(){
        return view('buscar');
    }

    public function crearDirectorio(Request $request){
        $nvoDirectorio = new directorio();
        $nvoDirectorio->codigoEntrada = $request->input('codigo');
        $nvoDirectorio->nombre = $request->input('nombre');
        $nvoDirectorio->apellido = $request->input('apellido');
        $nvoDirectorio->correo  = $request->input('correo');
        $nvoDirectorio->telefono  = $request->input('telefono');
        
        $nvoDirectorio->save();
       
    }

    public function BuscarDirectorio(Request $request){
        $correoBuscar=$request->input('correo');
        $directorioEncontrado = directorio::where('correo', $correoBuscar);

        return views('verContactos', compact('directorioEncontrado'));
    }
}
