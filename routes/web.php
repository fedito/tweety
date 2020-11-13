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

Route::middleware('auth')->group(function(){
    Route::get('/tweets', 'App\Http\Controllers\TweetController@index')->name('home');
    Route::post('/tweets', 'App\Http\Controllers\TweetController@store');  
    Route::post('/tweets/{tweet}/like', 'App\Http\Controllers\LikeController@store');
    Route::delete('/tweets/{tweet}/like', 'App\Http\Controllers\LikeController@destroy');
    Route::post('/profile/{user:username}/follow', 'App\Http\Controllers\FollowController@store')->name('follow');
    Route::get('/profile/{user:username}/edit', 'App\Http\Controllers\ProfileController@edit')->middleware('can:edit,user');
    Route::patch('/profile/{user:username}', 'App\Http\Controllers\ProfileController@update')->middleware('can:edit,user');
});

Route::get('/profile/{user:username}', 'App\Http\Controllers\ProfileController@show')->name('profile');

Route::get('/explore', 'App\Http\Controllers\ExploreController@index')->name('explore');

Auth::routes();



