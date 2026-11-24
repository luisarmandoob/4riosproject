<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OpinionController;

Route::get('/', function () {
    return view('4rios');
});


Route::get('/comentarios', function () {
    return view('comentarios');
});

Route::post('/guardarOpinion', [OpinionController::class,'guardarOpinion']);
