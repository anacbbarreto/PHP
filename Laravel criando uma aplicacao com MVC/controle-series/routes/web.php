<?php

use App\Http\Controllers\Series;
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
    return redirect('/series');
});


Route::controller(Series::class)->group(function () {

Route::get('/series', 'index');

Route::get('/series/criar', 'create');

Route::post('/series/salvar','store');

Route::delete('/series/{id}', [Series::class, 'destroy'])->name('series.destroy');

Route::put('/series/{id}', [Series::class, 'update'])->name('series.update');
});

