<?php

namespace App\Http\Controllers;

use App\Models\servicios;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    //
    public function servicio(){
        return view('servicio');
    }

    public function serviciostore(Request $request){
        $servicio = new servicios();
        $servicio->servicio=$request->servicios;
        $servicio->save();
        return $servicio;
    }
}

