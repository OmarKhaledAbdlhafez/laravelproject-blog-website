<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class comments_controller extends Controller
{
    function add ( Post $post){
        $c = new Comment();
        $c->body=request('body');
        $c->post_id=$post->id;
        $c->save();
        return back();
    }
}
