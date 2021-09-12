<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'difficulty',
        'url',
        'site',
        'author_id',
    ];

    public function getAuthor(){
        return User::find($this->author_id);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }
    
    public function getTasker(){
        return Tasker::getTasker(auth()->user(),$this);
    }

    public static function getUnsolved(){
        $tasks = Tasker::where('user_id','=',auth()->user()->id)->where('solved','!=',true)->pluck('task_id');
        return Task::whereIn('id',$tasks)->get();
    }

    public static function getSolved(){
        $tasks = Tasker::where('user_id','=',auth()->user()->id)->where('solved','=',true)->pluck('task_id');
        return Task::whereIn('id',$tasks)->get();
    }
}
