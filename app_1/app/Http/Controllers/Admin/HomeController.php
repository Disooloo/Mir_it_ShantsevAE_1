<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts_user = User::all()->count();
        $posts_count = Post::all()->count();
        $category_count = Category::all()->count();
        $blog_count = Blog::all()->count();

        return view('admin.admin', [
            'posts_count' => $posts_count,
            'posts_user' => $posts_user,
            'category_count' => $category_count,
            'blog_count' => $blog_count,
        ]);

    }
}
