<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasker extends Model
{
    use HasFactory;

    public function getUser(){
        return User::find($this->user_id);
    }

    public function getTask(){
        return Task::find($this->task_id);
    }

    public function Solved(){
        return $this->solved;
    }

    public static function assign($u,$t){
        $uid = $u->id;
        $tid = $t->id;
        $test = Tasker::where('user_id','=',$uid)->where('task_id','=',$tid);
        if($test->get()->count() > 0){
            return $test->get();
        }
        $tasker = new Tasker;
        $tasker->user_id = $uid;
        $tasker->task_id = $tid;
        $tasker->solved = false;
        $tasker->sub_number = null;
        $tasker->save();
        return $tasker;
    }

    public static function getTasker($u,$t){
        $uid = $u->id;
        $tid = $t->id;
        return Tasker::where('user_id','=',$uid)->where('task_id','=',$tid)->get();
    }

}
