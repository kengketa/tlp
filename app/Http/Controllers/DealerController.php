<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dealer;
use Session;

class DealerController extends Controller
{
    public function index(Request $request){

        $search = $request['search'];
        // dd($search);
        if ($search == null) {
            $dealers = Dealer::all();
        }else{
            $dealers = Dealer::where('name', 'LIKE', '%' . $search . '%')
            ->orWhere('email', 'LIKE', '%' . $search . '%')
            ->orWhere('tel', 'LIKE', '%' . $search . '%')
            ->orWhere('comment', 'LIKE', '%' . $search . '%')->get();
        }

        return view('dealers.index')->with('dealers',$dealers);
    }

    public function create(){
        return view('dealers.create');
    }

    public function store(Request $request){

        // $validated = $request->validate([
        //     'name'  => 'required|unique:dealers',
        //     'email' => 'required|email|unique:dealers',
        //     'tel'   =>  'required|number'

        // ]);
        // dd($validated);
        // dd($request->all());

            try {
                Dealer::create([
                    'name'  =>  $request['name'],
                    'email' =>  $request['email'],
                    'tel'   =>  $request['tel'],
                    'address'   =>  $request['address'],
                    'comment'   =>  $request['comment']
                ]);
                return redirect(route('dealers.index'));
            } catch (\Throwable $th) {
                return redirect()->back()->with('error','Somthing went wrong!');
            }
    }

    public function view($id){
        $dealer = Dealer::findOrfail($id);
        return view('dealers.view')->with('dealer',$dealer);
    }
    public function edit($id){
        $dealer = Dealer::findOrfail($id);
        return view('dealers.edit')->with('dealer',$dealer);
    }
    public function update(Request $request,$id){

    try {
        $dealer = Dealer::findOrFail($id);
        $dealer->name = $request['name'];
        $dealer->email = $request['email'];
        $dealer->tel = $request['tel'];
        $dealer->address = $request['address'];
        $dealer->comment = $request['comment'];
        $dealer->save();

        return redirect(route('dealers.index'))->with('success','dealer updated completed');
    } catch (\Throwable $th) {
        return redirect()->back()->with('error','Somthing went wrong!');
    }


    }
}
