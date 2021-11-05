<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $post_count = Post::all()->count();
        $post = Post::paginate(10);

        return view('main.index', compact('post_count', 'post'));
    }
    public function blog()
    {
        $blog_count = Blog::all()->count();
        $blog = Blog::paginate(10);

        return view('main.blog.index', compact('blog_count', 'blog'));
    }

    public function show(Blog $blog)
    {
        event('postHasViewed', $blog);
        return view('main.blog.show',[
            'blog' => $blog,
        ]);
    }


    public function search(Request $request)
    {
        $s = $request->s;
        $post = Post::where('title', 'LIKE', "%{$s}%")->orderBy('title')->paginate(10);
        $post_count = $post->count();
        return view('main.index', compact('post', 'post_count'));
    }

}
