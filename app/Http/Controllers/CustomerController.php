<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Session;

class CustomerController extends Controller
{
    public function index(Request $request){

        $search = $request['search'];
        // dd($search);
        if ($search == null) {
            $customers = Customer::all();
        }else{
            $customers = Customer::where('name', 'LIKE', '%' . $search . '%')
            ->orWhere('email', 'LIKE', '%' . $search . '%')
            ->orWhere('tel', 'LIKE', '%' . $search . '%')
            ->orWhere('comment', 'LIKE', '%' . $search . '%')->get();
        }

        return view('customers.index')->with('customers',$customers);
    }

    public function create(){
        return view('customers.create');
    }

    public function store(Request $request){

        // $validated = $request->validate([
        //     'name'  => 'required|unique:customers',
        //     'email' => 'required|email|unique:customers',
        //     'tel'   =>  'required|number'

        // ]);
        // dd($validated);
        // dd($request->all());

            try {
                Customer::create([
                    'name'  =>  $request['name'],
                    'email' =>  $request['email'],
                    'tel'   =>  $request['tel'],
                    'address'   =>  $request['address'],
                    'comment'   =>  $request['comment']
                ]);
                return redirect(route('customers.index'));
            } catch (\Throwable $th) {
                return redirect()->back()->with('error','Somthing went wrong!');
            }
    }

    public function view($id){
        $customer = Customer::findOrfail($id);
        return view('customers.view')->with('customer',$customer);
    }
    public function edit($id){
        $customer = Customer::findOrfail($id);
        return view('customers.edit')->with('customer',$customer);
    }
    public function update(Request $request,$id){

    try {
        $customer = Customer::findOrFail($id);
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->tel = $request['tel'];
        $customer->address = $request['address'];
        $customer->comment = $request['comment'];
        $customer->save();

        return redirect(route('customers.index'))->with('success','customer updated completed');
    } catch (\Throwable $th) {
        return redirect()->back()->with('error','Somthing went wrong!');
    }


    }
}
