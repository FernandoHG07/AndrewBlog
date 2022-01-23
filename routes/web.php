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
    return view('index');
})->name ('inicio');

Route::get('/trabajos', function () {
    return view('works');
})->name ('works');

Route::get('/acerca-de-mi', function () {
    return view('about');
})->name ('about');

Route::get('/contacto', function () {
    return view('contact');
})->name ('contact');

Route::get('/remixes', function () {
    return view('work1');
})->name ('work1');

Route::get('/eventos', function () {
    return view('work2');
})->name ('work2');

Route::get('/album', function () {
    return view('work3');
})->name ('work3');

Route::get('/colaboraciones', function () {
    return view('work4');
})->name ('work4');

Route::get('/studio', function () {
    return view('work5');
})->name ('work5');

Route::get('/futuro', function () {
    return view('work6');
})->name ('work6');