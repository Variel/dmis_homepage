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
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['url' => 'about']);
});

Route::get('/people', function () {
    return view('people', ['url' => 'people']);
});

Route::get('/research', function () {
    return view('research', ['url' => 'research']);
});

Route::get('/publications', function () {
    return view('publications', ['url' => 'publications']);
});

Route::get('/seminar', function () {
    return view('seminar', ['url' => 'seminar']);
});

Route::get('/course', function () {
    return view('course', ['url' => 'course']);
});

Route::get('/alumni', function () {
    return view('alumni', ['url' => 'alumni']);
});