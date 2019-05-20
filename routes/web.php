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
    return redirect()->route('home');
});

Route::get('/resume', function () {
    return view('resume');
})->name('resume.index');

Route::prefix('blog')
        ->name('blog.')
        ->group(function () {
            Route::get('/', 'BlogController@index');
        });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact-me', 'HomeController@contactMe')->name('contact.me');
