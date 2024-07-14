<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;

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

Route::get('/', [FileController::class, 'index'])->name('homeform');

Route::get('/add', function () {
    return view('addform');
})->name('addform');

Route::get('/update', function () {
    return view('updateform');
})->name('updateform');

Route::get('/view', [FileController::class, 'view'])->name('viewform');
Route::get('/dataform', [FileController::class, 'data'])->name('dataform');
Route::post('/insert', [FileController::class, 'insert'])->name('insertdata');