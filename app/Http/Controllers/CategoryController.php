<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    public function index(){
        $categories=Category::all();
        return view('category.index',compact('categories'));
    }

    public function create(){
      return view('category.create');
    }

    public function store(Request $request){
      $category=new Category();
      $category->type=$request->type;
      $category->save();
      return redirect()->route('category.index');
    }

    public function edit($id){
      $category=Category::findOrFail($id);
      return view('category.edit',compact('category'));
    }

    public function update(Request $request){
      $category=Category::findOrFail($request->id);
      $category->type=$request->type;
      $category->save();
      return redirect()->route('category.index');
    }

    public function del($id){
      $category=Category::findOrFail($id);
      $category->delete();
      return redirect()->route('category.index');
    }
}
