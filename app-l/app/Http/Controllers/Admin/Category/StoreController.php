<?php

namespace App\Http\Controllers\Admin\Category;

use App\Category;
use App\Http\Requests\Admin\Category\StoreRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $category = new Category();
        $category->title = $request->input('title');

        $category->save();

        return redirect()->route('admin.category.index');
    }


}
