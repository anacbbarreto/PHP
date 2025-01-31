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
    return view('welcome');
});

Route::get('/series', [Series::class, 'index']);

Route::get('/series/criar', [Series::class, 'create']);

Route::post('/series/salvar', [Series::class, 'store']);

Route::delete('/series/{id}', [Series::class, 'destroy'])->name('series.destroy');

Route::put('/series/{id}', [Series::class, 'update'])->name('series.update');


