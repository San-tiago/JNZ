<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        
        return view('dashboard.home');
    }

    public function supplier()
    {   
        $suppliers = Supplier::orderBy('supplier_name')->get();
        
        return view('dashboard.supplier',[
            'suppliers' => $suppliers
        ]);
    }
    public function accounts()
    {   
        
        return view('dashboard.account');
    }
    public function products()
    {   
        
        return view('dashboard.product');
    }
    public function orders()
    {   
        
        return view('dashboard.order');
    }
    public function sales()
    {   
        
        return view('dashboard.sale');
    }
    public function transactions()
    {   
        
        return view('dashboard.transaction');
    }


}
