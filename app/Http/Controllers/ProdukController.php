<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function produk (){
        return view('produk');
    }
    public function produk1 (){
        return view('produk1');
    }
    public function produk2 (){
        return view('produk2');
    }
}