<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class TopController extends Controller
{
    public function index($categoryId = 0)
    {
        $post = Post::latest();
        $categories = Category::get();

        if ($categoryId) {
            $post->where('cat_id', $categoryId);
        }

        return view('main.top.index', [
            'post' => $post->get(),
            'categories' => $categories,
            'categoryId' => $categoryId
        ]);
    }
}
