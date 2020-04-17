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
    return view('index');
});
Route::get('/show/1', function () {
    return view('show');
});
Route::get('/coor/1', function () {
    return view('coor');
});

Route::get('/new_clothes', function () {
    return view('new_clothes');
});
Route::get('/new_coor', function () {
    return view('new_coor');
});

Route::get('/edit_clothes/1', function () {
    return view('edit_clothes');
});
Route::get('/edit_coor/1', function () {
    return view('edit_coor');
});
