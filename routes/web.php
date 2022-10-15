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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//route of user and profile

Route::get('/profile','ProfileController@index')->name('profile');
Route::put('/profile/update','ProfileController@update')->name('profile.update');

//route of user andposts

// Route::resource('/posts', 'PostController');
Route::get('posts', 'PostController@index')->name('posts');
Route::get('post/trashed', 'PostController@postTrashed')->name('post.trashed');
Route::get('post/create', 'PostController@create')->name('post.create');
Route::post('post/store', 'PostController@store')->name('post.store');
Route::get('post/edit/{id}', 'PostController@edit')->name('post.edit');
Route::put('posts/update/{id}', 'PostController@update')->name('post.update');
Route::get('posts/show/{slug}', 'PostController@show')->name('post.show');
Route::get('posts/destroy/{id}', 'PostController@destroy')->name('post.destroy');
Route::get('posts/hdelete/{id}', 'PostController@hdelete')->name('post.hdelete');
Route::get('posts/restore/{id}', 'PostController@restore')->name('post.restore');

//route of post tags

// Route::resource('/posts', 'PostController');
Route::get('tags', 'TagController@index')->name('tags');
Route::get('tag/create', 'TagController@create')->name('tag.create');
Route::post('tag/store', 'TagController@store')->name('tag.store');
Route::get('tag/edit/{id}', 'TagController@edit')->name('tag.edit');
Route::put('tag/update/{id}', 'TagController@update')->name('tag.update');
Route::get('tag/destroy/{id}', 'TagController@destroy')->name('tag.destroy');


//route of users


Route::get('users', 'UserController@index')->name('users');
Route::get('user/create', 'UserController@create')->name('user.create');
Route::post('user/store', 'UserController@store')->name('user.store');
Route::get('user/destroy/{id}', 'UserController@destroy')->name('user.destroy');
