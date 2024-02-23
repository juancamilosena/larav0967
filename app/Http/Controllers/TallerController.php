<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TallerController extends Controller
{
    //numeroprimo
    public function create()
    {
        return view('numeroPrimo');
    }

    public function store(Request $request)
    {
        $request->validate([
            'numero' => 'required|interger|min:2',
        ]);

        $numero= $request->input('numero');
        $esPrimo = $this->esPrimo($numero);

        return view('formulario',compact('numero', 'esPrimo'));
    }

    public function esPrimo(Request $request)
    {
        $numero = $request->numero;
        $bool = true;
        if($numero < 2) {
            $bool = false;
        }

        for ($i = 2; $i <= sqrt($numero); $i++){
            if ($numero % $i == 0){
                $bool = false;
            }
        }
        return ($bool ) ? "Sí es" : "No es" ;
    }
    

}
