<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class AccountController extends Controller
{
    //
    public function accounts()
    {   
        $accounts = User::orderBy('name')->get();
        
        return view('dashboard.account',[
            'accounts' => $accounts
        ]);
    }
}
