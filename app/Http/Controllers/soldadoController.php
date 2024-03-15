<?php

namespace App\Http\Controllers;

use App\Models\Soldados;
use Illuminate\Http\Request;

class soldadoController extends Controller
{
    //
    public function formularioSoldado(){
        return view('formularioSoldado');
    }

    public function soldadostore(Request $request){
        $Soldado = new Soldados();
        $Soldado->nombre=$request->nombre;
        $Soldado->apellido=$request->apellido;
        $Soldado->grado=$request->grado;
        $Soldado->save();
        return $Soldado;
    }
}
