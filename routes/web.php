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

// Route::get('/', 'AppController@Index') ->name('dashboard');
Route::get('/', function(){
    return redirect()->route('coming_soon');
});
Route::get('/test', 'AppController@test_Index') ->name('test.home');
Route::get('/test/career', 'AppController@career_View') ->name('test.career');
Route::get('/test/blog', 'AppController@blog_View') ->name('test.blog');

Route::get('/coming-soon', 'ExtraController@coming_soon')->name('coming_soon');