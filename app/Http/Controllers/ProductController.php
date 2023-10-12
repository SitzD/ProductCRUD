<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::get();

        return view('products.index', [
            'products' => Product::get(),
        ]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('products'), $imageName);


        $product = new Product();
        $product->image = $imageName;
        $product->price = $request->input('price');
        $product->name = $request->name;
        $product->description = $request->description;

        $product->save();

       return back()->withSuccess('Product created successfully');

    }

    public function edit($id){
        $product = Product::where('id',$id)->first();

        return view('products.edit',[
            'product' => $product
        ]);
    }

    public function update(Request $request, $id){

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $product = Product::where('id',$id)->first();

        if(isset($request->image)){
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('products'), $imageName);
            $product->image = $imageName;
        }

        $product->name = $request->name;
        $product->description = $request->description;

        $product->save();

       return back()->withSuccess('Product created successfully');
    }

    public function delete($id){
        $product = Product::where('id',$id)->first();
        $product->delete();
        return back()->withSuccess('Product deleted successfully');
    }

    public function show($id){
        $product = Product::where('id',$id)->first();
        return view('products.show',['product' => $product]);
    }
}
