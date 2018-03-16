<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        $iTasks = Task::inComplete()->get();
        return view('tasks.list', compact('tasks', 'iTasks'));
    }

    public function show($id)
    {
        $task = Task::find($id);
        return view('tasks.show', compact('task'));
    }
}
