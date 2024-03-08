<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cuadraticaController extends Controller
{
    //
    public function cuadratica(){
        return view('cuadratica');
    }
    public function rais(Request $request)
    {
        
        $request->validate([
            'a' => 'required|numeric',
            'b' => 'required|numeric',
            'c' => 'required|numeric',
        ]);

        
        $a = $request->input('a');
        $b = $request->input('b');
        $c = $request->input('c');

        
        $discriminante = $b**2 - 4*$a*$c;

   
        if ($discriminante < 0) {
            return "Las raíces de la ecuación cuadrática son complejas.";
        }

   
        $raiz1 = (-$b + sqrt($discriminante)) / (2*$a);
        $raiz2 = (-$b - sqrt($discriminante)) / (2*$a);

        return "Las raíces de la ecuación cuadrática son: $raiz1, $raiz2";
    }
}
