<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Requests\CustomerCreateRequest;
use App\Notifications\CustomerEmailVerification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;

class CustomerController extends Controller
{


    public function index()
    {
     return view('customer.login');
    }
    public function register(){
        return view('customer.register');
    }
    public function store(CustomerCreateRequest $request)
    {
        $verifyCode = $this->generateRandomString();
        $request->merge(['verify_code' => $verifyCode]);
        $password = Hash::make($request->password);
        $request->merge(['password' => $password]);
        $customerSave = Customer::create($request->all());
        Notification::route('mail', $request->email)->notify(new CustomerEmailVerification($verifyCode));
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
    function generateRandomString($length = 5) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
