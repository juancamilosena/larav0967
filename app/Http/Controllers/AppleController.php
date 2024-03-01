<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AppleController extends Controller
{
    //
    public function formularioapple(){

        return view('apple');
 
     }



     public function AppleStore(Request $request){

        $producto = new Product();
        $producto->name=$request->name;
        $producto->price=$request->price;
        $producto->save();
        return $producto;
     }
}
