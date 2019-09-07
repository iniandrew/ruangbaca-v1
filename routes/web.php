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
    return view('templates.landing.default');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function() {
    //Timeline
    Route::get('/timeline', 'PostController@index')->name('post.index');
    //mypost
    Route::get('/karyaku', 'PostController@karyaku')->name('karyaku');
    //readmore
    Route::get('/read/{slug}/', 'PostController@readmore')->name('readmore');
    //TImeline

    //Tambah Karya
    Route::get('/post/buatkarya', 'PostController@create')->name('post.create');
    Route::post('/post/buatkarya', 'PostController@store')->name('post.store');
    //Tambah Karya

    //edit
    Route::get('/post/edit/{post}', 'PostController@edit')->name('post.edit');
    Route::patch('/post/edit/{post}', 'PostController@update')->name('post.update');

    //delete
    Route::delete('/post/delete/{post}', 'PostController@destroy')->name('post.destroy');

    //comment
    Route::post('/post/{post}/comment', 'PostController@comment')->name('post.comment');
});

