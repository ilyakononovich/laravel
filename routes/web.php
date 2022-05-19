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


Route::resource('/points', \App\Http\Controllers\PointController::class);

Route::resource('/category', \App\Http\Controllers\CategoryController::class);
Route::resource('/city', \App\Http\Controllers\CityController::class);
Route::resource('/poi',\App\Http\Controllers\PoiController::class);
Route::resource('/type',  \App\Http\Controllers\TypeController::class);

Route::post('/attach-attraction',[\App\Http\Controllers\PointController::class, 'attach']);
Route::post('/detach-attraction',[\App\Http\Controllers\PointController::class, 'detach']);

Route::resource('/attractions', \App\Http\Controllers\AttractionTypeController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
