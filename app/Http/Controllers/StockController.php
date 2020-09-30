<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stock;
class StockController extends Controller
{
    //
    public function store(Request $request){
        $data = request()->validate([
            'product_name' => 'required',
            'category' => 'required',
            'price' => 'required',
            'stock' => 'required'
        ]);
        Stock::create($request->all());
        return redirect('/stocks');
    }

    public function create(){
        return view ('Stocks.create');
    }

    public function edit($id){
        $product = Stock::find($id);
        return view('Stocks.edit', [
            'product' => $product
        ]);
    }

    public function update(Request $request, $id){
        $product = Stock::find($id);
        $product->update($request->all());
        return redirect('/stocks');
    }

    public function delete($id){
        $product = Stock::find($id);
        $product -> delete();
        return back();
    }
}
