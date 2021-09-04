<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Task;

class ComponentsController extends Controller
{
    //
    public function getPost($id){
        $post = Post::find($id);
        if (is_null($post)){
            return -1;
        }
        $author = User::find($post->author_id);
        return ['post'=>$post,'author'=> $author];
    }

    public function getTask($id){
        $task = Task::find($id);
        if (is_null($task)){
            return -1;
        }
        $author = User::find($task->author_id);
        return ['task'=>$task,'author'=> $author];
    }
}
