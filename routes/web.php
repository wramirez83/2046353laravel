<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('users');
});
Route::get('/q', function(){
    return view('qualify');
});
Route::get('/sum', function(){
    return 5+3;
});