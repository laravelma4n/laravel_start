<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Mark;
use App\Category;
class ProductController extends Controller
{
  public function index(){
      $products=Product::all();
      return view('product.index',compact('products'));
  }
  public function create(){
    $marks=Mark::all()->pluck('name', 'id');
    $categories=Category::all()->pluck('type', 'id');
    return view('product.create',compact('marks','categories'));
  }

  public function store(Request $request){
    $p=new Product();
    $p->name=$request->name;
    $p->description=$request->description;
    $p->mark_id=$request->mark_id;
    $p->category_id=$request->category_id;
    $p->save();
  }

  public function edit($id){
    $product=Product::findOrFail($id);
    $marks=Mark::all()->pluck('name', 'id');
    $categories=Category::all()->pluck('type', 'id');
    return view('product.edit',compact('product','marks','categories'));
  }

  public function update($id,Request $request){
    $p=Product::findOrFail($id);
    $p->name=$request->name;
    $p->description=$request->description;
    $p->mark_id=$request->mark_id;
    $p->category_id=$request->category_id;
    $p->save();
  }
}
