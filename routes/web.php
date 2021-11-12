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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/index/two','BlogController@index');
Route::get('/','BlogController@indexTwo');
Route::get('show/post/{id}','BlogController@showPost')->name('post.show');
Route::get('/about','BlogController@about');
Route::get('/contact','BlogController@contact');
Route::post('store/contact','BlogController@storeContact');
Route::post('search/blogs','BlogController@searchBlogs');





Route::get('view/post','AdminController@viewPost');
Route::get('admin/dashboard','AdminController@index')->middleware('admin');
Route::get('add/post','AdminController@addPost')->middleware('admin');
Route::post('store/post','AdminController@storePost')->middleware('admin');
Route::get('edit/post/{id}','AdminController@editPost')->middleware('admin');
Route::post('update/post/{id}','AdminController@updatePost')->middleware('admin');
Route::get('delete/post/{id}','AdminController@deletePost')->middleware('admin');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
