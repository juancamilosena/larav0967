<?php

namespace App\Http\Controllers;

use App\Models\cuartels;
use Illuminate\Http\Request;

class CuartelController extends Controller
{
    //
    public function cuartel(){

        return view('cuartel');
 
     }



     public function cuartelstore(Request $request){

        $cuartel = new cuartels();
        $cuartel->nombre=$request->nombre;
        $cuartel->ubicacion=$request->ubicacion;
        $cuartel->save();
        return $cuartel;
     }
}
