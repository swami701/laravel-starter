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
Route::get('/', 'PostsController@index');
Route::get('posts', 'PostsController@index');
Route::get('home', 'PostsController@index')->name('home');
Route::get('posts/create', 'PostsController@create');
Route::post('posts', 'PostsController@store');
Route::get('posts/{post}', 'PostsController@show');
Route::post('posts/{post}/comments', 'CommentsController@store');
Route::get('posts/tags/{tag}', 'TagsController@index');
Route::get('/register', 'RegistrationController@index');
Route::post('/register', 'RegistrationController@store');
Route::get('/login', 'SessionsController@index')->name('login');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');
