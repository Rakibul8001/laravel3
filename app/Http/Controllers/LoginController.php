<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function home(){
        return view('pages.home');
    }
    public function index(){
        return view('register');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function products(){
        $products= Product::orderBy('id','desc')->get();
        return view ('pages.products.index')->with('products',$products);
    }
}
