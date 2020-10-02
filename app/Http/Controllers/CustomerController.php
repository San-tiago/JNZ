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
        $customer = Customer::find($id);
        return view('Customers.edit', [
            'customer' => $customer
        ]);
    }

    public function update(Request $request, $id){
        $customer = Customer::find($id);
        $customer->update($request->all());
        return redirect('/orders');
    }

    public function delete($id){
        $customer = Customer::find($id);
        $customer -> delete();
        return back();
    }

}
