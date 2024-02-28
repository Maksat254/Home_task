<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paige;
use App\Models\Product;

class PaigesController extends Controller
{
    public function index()
    {
        $Paiges = Paige::all();

        $products = Product::all();

        return view('Paiges.index', compact('Paiges', 'products'));
    }
}
