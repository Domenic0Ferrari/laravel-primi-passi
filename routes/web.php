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
    return view('welcome');
});
// HOME
Route::get('/home', function () {
    return view('home');
});
// FEATURES
Route::get('/features', function () {
    return view('features');
});
// FEATURES
Route::get('/pricing', function () {
    return view('pricing');
});
