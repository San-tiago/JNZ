<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
class CustomerController extends Controller
{
    public function store(Request $request){
        $data = request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'middle_name' => 'required',
            'address' => 'required',
            'contact_number' => 'required'
        ]);
        Customer::create($request->all());
        return redirect('/orders');
    }

    public function create(){
        return view ('Orders.create');
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
