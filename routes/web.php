<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('homeform');

Route::get('/add', function () {
    return view('addform');
})->name('addform');

Route::get('/update', function () {
    return view('updateform');
})->name('updateform');

Route::get('/view', function () {
    return view('viewform');
})->name('viewform');
