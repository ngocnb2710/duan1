<?php

namespace App\Http\Controllers;


use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index(){
        $category = Category::all();

        return view('admin/categories/list', ['category'=>$category]);
    }
    public function addForm(){

        return view('admin/categories/add');
    }
    public function add(Request $request){
        $category = new Category();
        $category->name = $request->name;
        $category->created_at = now();
        $category->save();
        return redirect()->back();
    }
}
