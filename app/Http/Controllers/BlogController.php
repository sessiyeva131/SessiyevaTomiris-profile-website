<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    //
    public function index(){
        $posts = Post::all();
        return view('post.index')->with(['posts' => $posts]);
    }

    public function store(Request $request){
        Post::create([
            'title' => $request->title,
            'body' => $request->body
        ]);

        return back();
    }

    public function get_info($id){
        $mypost = Post::find($id);

        if($mypost == null)
            return response(404);
        
        return view('post.info')->with(['info' => $mypost]);
    }
}
