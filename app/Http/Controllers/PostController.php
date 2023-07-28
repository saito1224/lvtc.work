<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

dev_basis02
class PostController extends Controller
{
    public function index(Post $post)
{
    return view('posts.index')->with(['posts' => $post->getPaginateByLimit()]);
}
    
}



class PostController extends Controller
{
    public function index(Post $post){
        return $post->get();
    }
    
}
 master
