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
    return view('welcome');
});

Route::get('about', function () {
    $tasks = [
        'Learn laravel',
        'lumen',
    ];
    return view('about', compact('tasks'));
});

Route::get('tasks', function () {
    $tasks = \App\Task::all();
    $iTasks = \App\Task::inComplete()->get();
    return view('tasks.list', compact('tasks', 'iTasks'));
});

Route::get('tasks/{id}', function ($id) {
    $task = \App\Task::find($id);
    return view('tasks.show', compact('task'));
});
