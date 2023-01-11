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

    $welcomeM = "Questo messaggio di benvenuto è una variabile inserita tramite funzione 'compact'! ";

    return view('home', compact('welcomeM'));
});

Route::get('/chisiamo', function () {
    return view('chisiamo');
});

Route::get('/startup', function () {
    return view('startup');
});

Route::get('/about', function () {
    return view('about');
});

