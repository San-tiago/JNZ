<?php

namespace App\Http\Controllers;
use App\Stock;
use App\Customer;
use App\Order;
use Illuminate\Http\Request;
class CustomerOrdersController extends Controller
{
    //
    public function orders(){

        return view ('Orders.orders');
    }
    public function addorder($id){
        $product = Stock::find($id);
        $customers = Customer::orderBy('first_name')->get();
        return view('Orders.addorder', [
            'product' => $product,
            'customers' => $customers

        ]);
    }

    public function store(Request $request){
        $data = request()->validate([
            'product_name' => 'required',
            'category' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'total' => 'required',
            'customer' => 'required'
        ]);
        Order::create($request->all());
        return redirect('/products');
    }
}
