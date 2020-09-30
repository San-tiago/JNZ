<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
    //
    public function store(Request $request){
        $data = request()->validate([
            'product_name' => 'required',
            'category' => 'required',
            'price' => 'required',
            'measurement' => 'required'
        ]);
        Product::create($request->all());
        return redirect('/products');
    }

    public function create(){
        return view ('Products.create');
    }

    public function edit($id){
        $product = Product::find($id);
        return view('Products.edit', [
            'product' => $product
        ]);
    }

    public function update(Request $request, $id){
        $product = Product::find($id);
        $product->update($request->all());
        return redirect('/products');
    }

    public function delete($id){
        $product = Product::find($id);
        $product -> delete();
        return back();
    }
}
