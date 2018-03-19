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
    return view('welcome.index');
});

Route::get('about', function () {
    $tasks = [
        'Learn laravel',
        'lumen',
    ];
    return view('about.index', compact('tasks'));
});

Route::get('tasks', 'TasksController@index');

Route::get('tasks/{task}', 'TasksController@show');

// Posts
Route::get('posts', 'PostsController@index');
Route::get('posts/create', 'PostsController@create');
Route::post('posts', 'PostsController@store');
Route::get('posts/{post}', 'PostsController@show');
Route::post('posts/{post}/comments', 'CommentsController@store');

