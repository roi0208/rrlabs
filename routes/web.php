<?php

use Illuminate\Support\Facades\Route;
//roy
Route::get('/home', function () {
    return view('home');
});
//atha
Route::get('/pengetahuan', function () {
    return view('pengetahuan');
});
Route::get('/pengetahuan/{slug}', function ($slug) {
    if (view()->exists("pengetahuan.$slug")) {
        return view("pengetahuan.$slug", ['slug' => $slug]);
    }
    abort(404);
});
