<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
class SupplierController extends Controller
{
    //

    public function store(Request $request){
        $data = request()->validate([
            'supplier_name' => 'required',
            'address' => 'required',
            'contact_number' => 'required',
            'product' => 'required'
        ]);
        Supplier::create($request->all());
        return redirect('/suppliers');
    }

    public function create(){
        return view ('Supplier.create');
    }

    public function edit($id){
        $supplier = Supplier::find($id);
        return view('Supplier.edit', [
            'supplier' => $supplier
        ]);
    }

    public function update(Request $request, $id){
        $supplier = Supplier::find($id);
        $supplier->update($request->all());
        return redirect('/suppliers');
    }

    public function delete($id){
        $supplier = Supplier::find($id);
        $supplier -> delete();
        return back();
    }
}
