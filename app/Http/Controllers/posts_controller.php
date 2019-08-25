<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class posts_controller extends Controller
{
     public function __construct()
     {
       //  $this->middleware(auth)->except(['welcome','show']);
     }

    public function welcome(){
        $posts= Post::get();
        return view('index',compact('posts'));
    }
    public function createpost(){
        return view('createpost');
    }
    public function show($id){
        $post = Post::find($id);
        return view('showpost',compact('post'));

    }
    public function create(){
        $this->validate(request(),[
            'title'=>'required',
            'body'=>'required'
        ]);
        $post = new Post();
      $post->title= request('title');
      $post->body= request('body');
      $post->user_id=auth()->id();
      $post->save();
       return redirect('/');
    }
}
