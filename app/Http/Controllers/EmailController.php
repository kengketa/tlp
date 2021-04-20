<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Mail\Template;
use Session;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function index(){
        $customers = Customer::all();
       return view('emails.index')->with('customers',$customers);

    }
    public function send(Request $request){
        // dd($request->all());
        Session::put('content',$request['content']);
        $emails = $request['emails'];
        $count = 0;
        foreach($emails as $email){
            try {
                Mail::to($email)->send(new Template());
                $count++;
            } catch (\Throwable $th) {
                //throw $th;
            }
        }
        Session::forget('content');
        $message = $count." emails sent successfully.";
        if ($count!=0) {
            return redirect()->back()->with('success',$message);
        }



    }


}
