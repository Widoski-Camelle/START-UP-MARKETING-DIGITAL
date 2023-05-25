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
    return view('home');
});

Route::get('/services/community-management', function () {
    return view('community-management');
});

Route::get('/services/publicite', function () {
    return view('publicite');
});

Route::get('/services/audit', function () {
    return view('audit');
});

Route::get('/services/developpement-web', function () {
    return view('developpement-web');
});

Route::get('/services/conception-graphique', function () {
    return view('conception-graphique');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
