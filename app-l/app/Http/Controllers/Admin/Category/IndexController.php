<?php

namespace App\Http\Controllers\Admin\Category;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke(Category $categories)
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

}
