<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function index()
    {
     return view('customer.login');
    }
    public function register(){
        return view('customer.register');
    }
    public function store(Request $request)
    {
        $password = Hash::make($request->password);
        $request->merge(['password' => $password]);
        $customerSave = Customer::create($request->all());
        return redirect()->back()->with('success','Registration Successful');
    }
    public function login(Request $request){
        $model = Customer::where('email', $request->email)->first();
        if ($model) {
            if (Hash::check($request->password, $model->password)) {
                session_start();
                $_SESSION['useremail'] = $request->email;
                return redirect()->route('front.home');
            } else{
                return redirect()->back()->with('error', 'Email or password did not match');
            }
        } else {
            return redirect()->back()->with('error', 'Email or password did not match');
        }
    }
}
