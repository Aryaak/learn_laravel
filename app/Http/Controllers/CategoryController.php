<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $data = Category::get();
        return view('pages.category.index', compact('data'));
    }

    public function destroy()
    {
        Category::where('id', request('id'))->delete();

        return redirect()->back();
    }
}
