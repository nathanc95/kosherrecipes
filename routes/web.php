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
Route::get('/home',function(){
    return view('home');
});

Route::get('/about',function(){
    return view('about');
});

Route::get('/category',function(){
    return view('category');
});

Route::get('/contact',function(){
    return view('contact');
});

Route::get('/page-fullwidth',function(){
    return view('page-fullwidth');
});

Route::get('/page-sidebar',function(){
    return view('page-sidebar');
});

Route::get('/shortcodes',function(){
    return view('shortcodes');
});

Route::get('/single',function(){
    return view('single');
});

Route::get('/single-sidebar',function(){
    return view('single-sidebar');
});

Route::get('/typography',function(){
    return view('typography');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
