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
        return view ('creatingPages.createSupplier');
    }
}
