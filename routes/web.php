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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::group(['middleware' => ['auth']], function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/about', [
        'uses'=>"Test@about",
        'as'=>'about'
    ]);
    Route::get('/genres', [
        'uses'=>"Test@genres",
        'as'=>'genres'
    ]);
    Route::get('/index', [
        'uses'=>"Test@index",
        'as'=>'index'
    ]);
    Route::get('/news', [
        'uses'=>"Test@news",
        'as'=>'news'
    ]);
    Route::get('/trendy', [
        'uses'=>"Test@trendy",
        'as'=>'trendy'
    ]);
    Route::get('/upcoming', [
        'uses'=>"Test@upcoming",
        'as'=>'upcoming'
    ]);
    Route::post('/contact',[
        'uses'=>'ContactController@submit'
    ]);
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
