<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Mail;

class EmailController extends Controller
{
    public function index(){
        $customers = Customer::all();
       return view('emails.index')->with('customers',$customers);

    }
    public function send(Request $request){
        dd($request->all());

    }


}
