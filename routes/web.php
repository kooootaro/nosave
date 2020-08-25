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
    return view('contents/top');
});
Route::get('/news', function () {
    return view('contents/news');
});
Route::get('/profile', function () {
    return view('contents/profile');
});
Route::get('/event', function () {
    return view('contents/event2020');
});
Route::get('/event2020', function () {
    return view('contents/event2020');
});
Route::get('/event2019', function () {
    return view('contents/event2019');
});
Route::get('/event2018', function () {
    return view('contents/event2018');
});
Route::get('/discography', function () {
    return view('contents/discography');
});
Route::get('/contact', function () {
    return view('contents/contact');
});
