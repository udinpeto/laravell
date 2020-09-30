<?php

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

Route::get('about', function () {
    return view('about');
});
Route::get('login', function () {
    return view('login');
});
Route::get('admin', function () {
    return view('admin');
});
Route::get('input', function () {
    return view('input');
});
Route::get('edit', function () {
    return view('edit');
});
Route::get('rs', function () {
    return view('rs');
});
Route::get('home', function () {
    return view('admin');
});
Route::get('lonto', function () {
    return view('lonto');
});
Route::get('reg', function () {
    return view('auth.register');
});
Route::get('login','Authcontroller@login');
Route::get('/logout','Authcontroller@logout');
Route::post('/postlogin','Authcontroller@postlogin');