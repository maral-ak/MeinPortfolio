<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function showSingleProduct(Product $product)
    {
     //show single resource
     return view('singleProduct', ['product' => $product]);
    }

    
}
