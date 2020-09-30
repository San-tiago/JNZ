<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
use App\Product;
use App\Stock;
use App\Customer;
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
        $products = Stock::orderBy('product_name')->get();
        return view('dashboard.product',[
            'products' => $products
        ]);

        return view('dashboard.product');
    }
    public function orders()
    {   
        $customers = Customer::orderBy('first_name')->get();
        return view('dashboard.order',[
            'customers' => $customers
        ]);
        
      
    }
    public function sales()
    {   
        
        return view('dashboard.sale');
    }
    public function stocks()
    {   
        $stocks = Stock::orderBy('product_name')->get();
        return view('dashboard.stock',[
            'stocks' => $stocks
        ]);
       
    }


}
