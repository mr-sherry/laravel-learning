<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('pages.product.index');
    }
    public function create()
    {
        return view('pages.product.index');
    }
    public function store(Request $request)
    {
        // dd($request);
        dd($request->all());
    }

}
