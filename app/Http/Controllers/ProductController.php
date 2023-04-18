<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = "Product List from ProductController!";
        return view('products.index', ['products' => $products]);
    }
}
