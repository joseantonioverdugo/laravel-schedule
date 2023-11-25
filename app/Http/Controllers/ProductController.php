<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('index', compact('products'));
    }

    public function addProduct()
    {
        return view('addProduct');
    }

    public function store(ProductRequest $request)
    {
        $product = Product::create($request->validated()); 

        return redirect()->route('index');
    }
}
