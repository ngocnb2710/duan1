<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index() {
        $product = Product::all();
        return view('admin/products/list', ['product'=>$product]);
    }
    public function addForm() {
        $category = Category::all();
        return view('admin/products/add', ['category'=>$category]);
    }
    public function add(Request $request){
        $product = new Product();
        $product->product_name = $request->product_name;
        $product->price = $request->price;
        $product->image = $request->image;
        $product->description = $request->description;
        $product->cate_id = $request->cate_id;
        $product->created_at = now();
        $product->is_active = 1;
        $product->save();
        return redirect()->back();
    }
}
