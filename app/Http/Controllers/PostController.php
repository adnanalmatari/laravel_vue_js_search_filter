<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('filter',['posts' => $posts ]);
    }
    public function getpost(Request $request)
    {
        $posts=Post::where('active',$request->sort)->get();
        return response()->json([
            'post'=>$posts
        ]);

    }
}
