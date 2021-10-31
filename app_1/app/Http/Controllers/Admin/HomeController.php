<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts_user = User::all()->count();
        $posts_count = Posts::all()->count();
        return view('admin.admin', [
            'posts_count' => $posts_count,
            'posts_user' => $posts_user
        ]);

    }
}
