<?php

use App\Person;
use App\Publication;

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
    return view('home', ['url' => 'home']);
});

Route::get('/about', function () {
    return view('about', ['url' => 'about']);
});

Route::get('/people', function () {
    $grades = Person::all()->groupBy('grade');
    return view('people', ['url' => 'people', 'grades' => $grades]);
});

Route::get('/research', function () {
    return view('research', ['url' => 'research']);
});

Route::get('/publications', function () {
    $publications = Publication::all();
    return view('publications', ['url' => 'publications', 'pubs' => $publications]);
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

Route::get('/news', function (\Illuminate\Http\Request $req) {
    $id = $req->input('id');
    return view("news.$id", ['url' => 'news']);
});