<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;
use App\Models\Tasker;

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

    public function store(){
        $this->middleware('admin');
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => ['required','url'],
            'site' => 'required',
            'difficulty' => ['required','numeric'],
        ]);
        $data['author_id'] = auth()->user()->id;
        
        $task = Task::create($data);
        $users = User::all();

        foreach($users as $user){
            Tasker::assign($user,$task);
        }

        return view('tasks.show',['task'=>$task]);
    }
}
