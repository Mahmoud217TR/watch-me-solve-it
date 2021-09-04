<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function getAuthor(){
        return User::find($this->author_id);
    }

    public function getAttachments(){
        return Attachment::where('post_id','=',$this->id)->get();
    }
    
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
    
}
