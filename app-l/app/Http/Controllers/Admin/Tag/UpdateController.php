<?php

namespace App\Http\Controllers\Admin\Category;

use App\Category;
use App\Http\Requests\Admin\Category\UpdateRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Category $detail )
    {
        $data = $request->validated();
        $detail->update($data);

        return view('admin.categories.show', compact('detail'));
    }
}
