<?php

namespace App\Http\Controllers;

use App\ProductImage;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Str;
use Image;


class AdminPagesController extends Controller
{
    function index(){
        return view('admin.pages.index');
    }
    function create(){
        return view('admin.pages.products.create');
    }
    function store(Request $request){
        $request->validate([
            'title'         => 'required|max:150',
            'description'   => 'required',
            'price'         => 'required|numeric',
            'quantity'      => 'required|numeric',

        ]);



       $product = new Product();
       $product->title=$request->title;
       $product->description=$request->description;
       $product->price=$request->price;
       $product->status=1;
       //$product->quantity=$request->quantity;
       $product->slug= Str::slug($request->title);
       $product->admin_id=1;
       $product->category_id=1;
       $product->brand_id = 1;

       $product->save();

      /* if($request->hasFile('product_image')){
           $image = $request->file('product_image');
           $img = time().'.'.$image->getClientOriginalExtension();
           $location=public_path('images/products/product/'.$img);
           Image::make($image)->save($location);

           $product_image = new ProductImage();
           $product_image->product_id= $product->id;
           $product_image->image=$img;

           $product_image->save();
       }*/
      if(count($request->product_image)>0){
          foreach ($request->product_image as $image){

          $img = time().'.'.$image->getClientOriginalExtension();
          $location=public_path('images/products/product/'.$img);
          Image::make($image)->save($location);

          $product_image = new ProductImage();
          $product_image->product_id= $product->id;
          $product_image->image=$img;

          $product_image->save();

          }
      }

       return redirect()->route('admin.pages.products.create');
    }
}
