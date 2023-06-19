<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormularioController;


Route::get('/', function () {
    return view('formulario');
});

Route::post('/submit',[FormularioController::class,'submit']);

?>