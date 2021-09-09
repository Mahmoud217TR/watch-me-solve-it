<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $tasks = Task::getUnsolved()->reverse();
        return view('tasks.tasks',['tasks'=>$tasks]);
    }

    public function show($id)
    {
        $task = Task::find($id);
        return view('tasks.show',['task'=>$task]);
    }
}
