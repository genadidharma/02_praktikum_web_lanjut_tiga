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

// Prak 1
Route::get('/', function () {
    echo "Selamat datang";
});

// Prak 1
Route::get('/about', function () {
    echo "1941720070 - I Made Genadi Dharma Slawa ";
});

// Prak 1
Route::get('/articles/{id}', function ($id) {
    echo "Halaman artikel dengan ID: " . $id;
});