<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function home(){
        return view('products.home',['products'=>Product::get()]);
    }

    public function create(){
        return view('products.create');
    }

    public function edit($id){
        $product = Product::where('id',$id)->first();
        return view('products.edit',['product' => $product]);
    }

    public function products(){
        return view('products.products',['products' => Product::get()]);
    }

    public function update(Request $request,$id){
        //valedate data
        $request-> validate([
            'title' => 'required',
            'firstname'=>'required',
            'surname'=>'required',
            'price'=>'required',
            'length'=>'required',
            'image'=>'nullable|mimes:jpeg,jpg,png,gif|max:5000'
        ]);

        $product = Product::where('id',$id)->first();

        if(isset($request->image)){
            //image upload
            $image =time().'.'.$request->image->extension();
            $request->image->move(public_path('products'),$image);
            $product->image = $image;
        }
        $product->Category = $request->Category;
        $product->title = $request-> title;
        $product->firstname = $request-> firstname;
        $product->surname = $request-> surname;
        $product->price = $request-> price;
        $product->length = $request-> length;
        
        $product-> save();
        return back()-> withSuccess('Product updated !!!');
    
    }

    public function store(Request $request){
        //valedate data
        $request-> validate([
            'title' => 'required',
            'firstname'=>'required',
            'surname'=>'required',
            'price'=>'required',
            'length'=>'required',
            'image'=>'required|mimes:jpeg,jpg,png,gif|max:5000'

        ]);
        //image upload
        $image =time().'.'.$request->image->extension();
        $request->image->move(public_path('products'),$image);

        $product =new Product();
        $product->Category = $request->Category;
        $product->title = $request-> title;
        $product->firstname = $request-> firstname;
        $product->surname = $request-> surname;
        $product->price = $request-> price;
        $product->length = $request-> length;
        $product->image = $image;
        $product-> save();
        return back()-> withSuccess('Product Created !!!');
    }

    public function destroy($id){

        $product = Product::where('id',$id)->first();
        $product->delete();
        return back()->withSuccess('Product Deleted !!! ');
        
    }

    public function show($id){
        $product = Product::where('id',$id)->first();
        return view('products.show',['product'=>$product]);
    }
}
