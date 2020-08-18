<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class ProductController extends Controller
{
    public function show()
    {
        $products = App\Products::all();
        return $products;
    }
}
