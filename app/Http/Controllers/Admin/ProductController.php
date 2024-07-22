<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function listProducts(){
        $products = Product::all();
        return view('admin.product.list-product')->with(['products' => $products]);
    }
    public function addProducts(){
        return view('admin.product.add-product');
    }
}
