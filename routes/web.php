<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\PersonalizacijaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PrijavaController;
use App\Http\Controllers\TestimonialController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExamController;



Route::get('/', function () {
    return view('home-page');
});







Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/', [HomePageController::class, 'index'])->name('home-page');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');


Route::get('/about-us', [AboutController::class, 'index'])->name('about-us');



Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('/courses/{language}/filter', [CourseController::class, 'filter'])->name('courses.filter');
Route::get('/courses/{language}', [CourseController::class, 'showLanguage'])->name('courses.language');

//Personalizacija ruti

Route::middleware(['auth'])->group(function () {
    Route::get('/personalizacija/1', [PersonalizacijaController::class, 'step1'])->name('personalizacija.1');
    Route::post('/personalizacija/1', [PersonalizacijaController::class, 'saveStep1'])->name('personalizacija.save1');
    Route::get('/personalizacija/2', [PersonalizacijaController::class, 'step2'])->name('personalizacija.2');
    Route::post('/personalizacija/2', [PersonalizacijaController::class, 'saveStep2'])->name('personalizacija.save2');
    Route::get('/personalizacija/3', [PersonalizacijaController::class, 'step3'])->name('personalizacija.3');
    Route::post('/personalizacija/3', [PersonalizacijaController::class, 'saveStep3'])->name('personalizacija.save3');
    Route::get('/personalizacija/4', [PersonalizacijaController::class, 'step4'])->name('personalizacija.4');
    Route::post('/personalizacija/store', [PersonalizacijaController::class, 'store'])->name('personalizacija.store');
});


Route::post('/set-personalizacija-session', function () {
    session(['from' => 'personalizacija']);
    return auth()->check()
        ? redirect('/personalizacija/1')
        : redirect()->route('register');
});

// Prijava ruti

Route::post('/prijavi-se/{type}', [PrijavaController::class, 'store'])->name('prijava.store');

//Testimonial ruta

Route::post('/testimonial', [TestimonialController::class, 'store'])->name('testimonial.store');


//Exams ruti



Route::get('/exams', [ExamController::class, 'index'])->name('exams.index');
Route::get('/exams/{exam}', [ExamController::class, 'show'])->name('exams.show');