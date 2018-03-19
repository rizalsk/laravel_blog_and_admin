<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    
    public function index(){
        $posts = Post::paginate(2);
        return view('theme::index', ['posts'=>$posts]);
    }

    public function show($slug){
        $post = Post::findBySlug($slug);
        return view('theme::post.show')->with('post', $post);
    }
}
