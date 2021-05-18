<?php

use Illuminate\Support\Facades\Route;

// questo "use" sostituisce il require_once
// scrivere tutto in maiuscolo per convenzione
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;

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

// nome del controller in cui vogliamo andare (HomeController) @ nome del metodo che vogliamo far eseguire
Route::get('/', 'HomeController@index');

Route::get('/movies', 'MovieController@index');
