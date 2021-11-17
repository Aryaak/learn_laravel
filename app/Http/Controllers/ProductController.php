<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::get();
        $no = 1;
        return view('pages.product.index', compact('data', 'no'));
    }

    public function destroy()
    {
        Product::where('id', request('id'))->delete();

        return redirect()->back();
    }
}
