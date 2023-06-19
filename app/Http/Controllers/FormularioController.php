<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
{

  
    public function submit(Request $requisicao){

        $email = $requisicao->input('email');
        
        return "feito";
    }
}


?>
