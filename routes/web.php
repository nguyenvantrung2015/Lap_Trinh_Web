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
Route::get('/menu', 'MenuController@index')->name('menu');

Route::get('/content', function () {
    return view('sites.content');
});

Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin', 'AdminController@admin');

Route::get('user/profile', 'UserController@profile')->name('profile');

Route::post('user/edit', 'UserController@editProfile')->name('edit.profile');

Route::get('product/detail', 'ProductController@detail')->name('product.detail');
