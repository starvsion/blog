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
Auth::routes();

Route::prefix('blog')
        ->name('blog.')
        ->group(function () {
            Route::get('/', 'BlogController@index')->name('index');
        });

Route::get('/admin/contact-me', 'AdminController@contactMe')
    ->middleware('auth', 'can:view-admin');

Route::get('/{any}', 'SpaController@index')
    ->where('any', '.*');
