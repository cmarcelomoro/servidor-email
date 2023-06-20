<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\classeEmail;
use Illuminate\Support\Facades\Mail;
class FormularioController extends Controller
{

  
    public function submit(Request $requisicao){

        $email = $requisicao->input('email');
        
        
        //return new \App\Mail\classeEmail($email);
        Illuminate\Support\Facades\Mail::send(new \App\Mail\classeEmail($email));
    }
}


?>
