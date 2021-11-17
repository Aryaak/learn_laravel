<?php

namespace App\Http\Controllers;

use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $data = Customer::get();
        return view('pages.customer.index', compact('data'));
    }

    public function destroy()
    {
        Customer::where('id', request('id'))->delete();
        return redirect()->back();
    }
}
