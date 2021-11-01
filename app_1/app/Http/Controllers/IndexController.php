<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {

        $post_count = Post::all()->count();
        return view('main.index',[
            'post' => \App\Models\Post::all(),
            'post_count' => $post_count,
        ]);
    }
}
