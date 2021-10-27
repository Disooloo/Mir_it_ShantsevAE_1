<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Category;
use App\tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke(Tag $tag)
    {
        $tag = Tag::all();
        return view('admin.tags.index', compact('tag'));
    }

}
