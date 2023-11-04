<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\contacto;

class contactosController extends Controller
{
    //
    public function verContactosPorId($codigoEntrada){
        $contactos = contacto::where('codigoEntrada',$codigoEntrada)->get();
        return view('verContactos', compact('contactos'));
    }

    public function eliminarContacto($id){
        $contacto = contacto::where('id' ,(int)$id);
        // return view('eliminar', compact('contacto'));
        return $contacto;
    }
}
