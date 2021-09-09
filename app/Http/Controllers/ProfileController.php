<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show($id){
        $user = User::findOrFail($id);
        return view('profile.show',['user'=>$user]);
    }

    public function edit($id){
        $user = User::findOrFail($id);
        $this->authorize('update',$user->profile);
        return view('profile.edit',['user'=>$user]);
    }

    public function update($id){
        $user = User::findOrFail($id);
        $this->authorize('update',$user->profile);
        $data = request()->validate([
            'name' => 'required',
            'profilePic' => ['image','nullable']
        ]);

        $user->name = $data['name'];
        if ($data['profilePic'])
            $user->picture = $data['profilePic']->store('uploads','public');

        $user->save();

        return view('profile.show',['user'=>$user]);
    }
}
