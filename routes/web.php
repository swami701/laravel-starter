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
Route::get('posts', 'PostController@index');
Route::get('posts/create', 'PostController@create');
Route::post('posts', 'PostController@store');
Route::get('posts/{post}', 'PostController@show');

