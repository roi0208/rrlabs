<?php

use Illuminate\Support\Facades\Route;
//roy
Route::get('/', function () {
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
Route::get('/portofolio', function() {
    return view('portofolio');
});

// Adib:
Route::get('/tentang-kami', function () {
    return view('tentang_kami'); // Ini merujuk ke file tentang_kami.blade.php
});
?>