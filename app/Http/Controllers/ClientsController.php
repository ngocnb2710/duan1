<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientsController extends Controller
{
    public function index()
    {
        $category = Category::all();
        $product = Product::all();
        return view('clients\index', ['category' => $category], ['product' => $product]);
    }
}
