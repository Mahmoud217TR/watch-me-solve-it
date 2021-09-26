<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Attachment;

class PostController extends Controller
{
    //
    public function store(){
        $this->middleware('admin');

        
        
        $data = request()->validate([
            'ptitle' => 'required',
            'ptext' => 'required',
        ]);
        $data2 =[
            'title' => $data['ptitle'],
            'text' => $data['ptext'],
            'author_id' => auth()->user()->id
        ];
        
        $p = Post::create($data2);

        if(request('attachments')){
            foreach(request('attachments') as $a){
                $att =  new Attachment;
                $att->title = $a->getClientOriginalName();
                $att->url = $a->store('uploads','public');

                $ext = strtolower($a->getClientOriginalExtension());
                if(in_array($ext,['jpg','jpeg','gif','png',''])){
                    $att->type = 'image';
                }else{
                    $att->type = 'file';
                }
                $att->post_id = $p->id;
                $att->save();
            }
        }
        

        return redirect(route('home'));
    }
}
