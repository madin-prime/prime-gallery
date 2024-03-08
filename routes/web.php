<?php

use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;
use App\Models\Image;

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
    return view('home')->with(['image' => Image::get() ]);
})->name('home');

Route::get('/upload', function () {
    return view('upload');
})->name('upload');

Route::post('/image-upload', [ImageController::class, 'upload'])->name('submit');

// Route::get('/img', [ImageController::class, 'redirectImage'])->name('img');