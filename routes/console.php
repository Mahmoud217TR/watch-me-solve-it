<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Task;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Profile;
use App\Models\MediaLink;
use App\Models\Tasker;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('init', function () {
    
    // Admin
    $user = new User;
    $user->name = 'Mahmoud Mahmoud';
    $user->email = "faafet.mahmoud@gmail.com";
    $user->password = Hash::make('123456789');
    $user->admin = true;
    $user->save();
    $user->profile()->save(new Profile);

    // Task
    $task = new Task;
    $task->title = 'Drinks';
    $task->description = 'Some description';
    $task->difficulty = 800;
    $task->url = 'https://codeforces.com/contest/200/problem/B';
    $task->site = 'Codeforces';
    $task->author_id = 1;
    $task->save();
    Tasker::assign($user,$task);
    
    $task = new Task;
    $task->title = 'Beautiful Matrix';
    $task->description = 'We have 𝑁 Forces Affecting at 3 Axis (x, y, z).
    In Order for the Body to be Idle the forces on the 3 axis must equal to 0';
    $task->difficulty = 1000;
    $task->url = ' https://codeforces.com/contest/263/problem/A';
    $task->site = 'Codeforces';
    $task->author_id = 1;
    $task->save();
    Tasker::assign($user,$task);

    // Post
    $post = new Post;
    $post->title = 'Testing Post';
    $post->text = 'Some description Some description Some description Some description Some description Some description Some description';
    $post->author_id = 1;
    $post->save();

    // Tags
    $tag = new Tag;
    $tag->name = 'Implementation';
    $tag->description = 'Implementation description';
    $tag->save();

    $tag = new Tag;
    $tag->name = 'C++';
    $tag->description = 'Language description';
    $tag->save();

    $tag = new Tag;
    $tag->name = 'Sorting';
    $tag->description = 'Sort description';
    $tag->save();

    $tag = Tag::find(1);
    $task = Task::find(1);
    $task->tags()->attach($tag);
    $task = Task::find(2);
    $task->tags()->attach($tag);
    
    $tag = Tag::find(1);
    $post = Post::find(1);
    $post->tags()->attach($tag);
    $tag = Tag::find(2);
    $post->tags()->attach($tag);
    $tag = Tag::find(3);
    $post->tags()->attach($tag);

    
})->purpose('Initilizing');
