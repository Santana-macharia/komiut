<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/signup', function () {
    return view('register');
})->name('signup');

Route::get('/signin', function () {
    return view('login');
})->name('signin');

Route::get('teacher', function () {
    return view('add_student');
})->name('teacher');

Route::get('student', function () {
    return view('student');
})->name('student');

Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('home');

require __DIR__.'/auth.php';