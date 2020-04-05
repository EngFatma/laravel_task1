<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function allCustomers(){
        $customers = Customer::get();
        
        return view('customers.allCustomers',[
            'customers'=>$customers
        ]);
    }
    public function fromCairo(){
        $customers = Customer::where('customerCity','=','cairo')->get();
        
        return view('customers.cairo',[
            'customers'=>$customers
        ]);
    }

    //
}
