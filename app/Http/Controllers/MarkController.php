<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mark;

class MarkController extends Controller
{
    public function index()
    {
        $marks=Mark::all();
        return view('mark.index',compact('marks'));
    }

    public function create(){
      return view('mark.create');
    }

    public function store(Request $request){
      $mark=new Mark();
      $mark->name=$request->name;
      $mark->save();

    }

}
