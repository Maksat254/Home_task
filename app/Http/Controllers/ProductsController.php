<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->name =$request->input('name');
        $product->price =$request->input('price');
        $product->quantity =$request->input('quantity');
        $product->save();

        return redirect('/')->with('success', 'Продукт успешно сохранен.');
    }
}

