<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class PaginaController extends Controller
{
    //
    public function formularioPagina(){

        return view('formularioPagina');
 
     }



     public function PaginaStore(Request $request){

        $producto = new Product();
        $producto->name=$request->name;
        $producto->price=$request->price;
        $producto->save();
        return $producto;
     }
}
