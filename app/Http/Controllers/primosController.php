<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class primosController extends Controller
{
    //
    public function mos(){
        return view('primos');
    }
    public function esPrimo($numero)
    {

        if ($numero <= 1) {
            return false;
        }

        for ($i = 2; $i <= $numero / 2; $i++) {
            if ($numero % $i == 0) {
                return false;
            }
        }

        return true;
    }

    public function primo(Request $request){
        $numero = $request->input('numero'); 

        $esPrimo = $this->esPrimo($numero); 

        if($esPrimo){
            return "El número $numero es primo.";
        } else {
            return "El número $numero no es primo.";
        }
    }
}
