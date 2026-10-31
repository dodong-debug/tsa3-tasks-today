<?php

namespace App\Http\Controllers;

use App\Models\Task;

class TaskController extends Controller
{
    public function today()
    {
        $tasks = Task::whereDate('task_date', today())
            ->orderBy('created_at', 'desc')
            ->get();

        return view('welcome', compact('tasks'));
    }

    public function index()
    {
        $tasks = Task::orderBy('task_date', 'asc')->get();

        return view('tasks', compact('tasks'));
    }
}