<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news (){
        return view('news');
    }
    public function news1(Request $request){
        return view('news1',['request' => $request->id]);
    }
}
