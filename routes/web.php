<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('4rios');
});


Route::get('/comentarios', function () {
    return view('comentarios');
});
