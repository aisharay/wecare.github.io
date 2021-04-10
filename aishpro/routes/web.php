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

Route::get('/doctorreccomondation', function () {
    return view('doctorreccomondation');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/prescriptionentry', function () {
    return view('prescriptionentry');
});

Route::get('/presentmed', function () {
    return view('presentmed');
});

Route::get('/previousmed', function () {
    return view('previousmed');
});

Route::get('/', function () {
    return view('welcome');
});
