<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('formulario');
});

Route::post('/submit',[FormularioController::class,'submit']);

?>