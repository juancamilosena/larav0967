<?php

namespace App\Http\Controllers;

use App\Models\apple;
use Illuminate\Http\Request;

class AppleController extends Controller
{
    //
    public function formularioapple(){

        return view('apple');
 
     }



     public function AppleStore(Request $request){

        $apple = new apple();
        $apple->name=$request->name;
        $apple->price=$request->price;
        $apple->save();
        return $apple;
     }
}
