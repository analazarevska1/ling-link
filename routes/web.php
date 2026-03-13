<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/contact', [ContactController::class, 'index'])->name('contact');


Route::get('/about-us', [AboutController::class, 'index'])->name('about-us');


// Route::get("/contact",function(){
//     return view("contact/index");
// });