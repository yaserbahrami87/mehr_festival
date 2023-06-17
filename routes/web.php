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

Route::get('/news', function () {
    return view('news');
});

Route::get('/pillars', function () {
    return view('pillars');
});


Route::get('/gallery', function () {
    return view('gallery');
});


Route::get('/contactUs', function () {
    return view('contact');
});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/migrate',function()
{
    Artisan::call('migrate');
    return "Migration";
});



Route::get('/clear_cache',function()
{
    Artisan::call('cache:clear');
    return "Clear cache";
});

