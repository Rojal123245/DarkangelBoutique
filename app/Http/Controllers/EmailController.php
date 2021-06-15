<?php

namespace App\Http\Controllers;

use App\Mail\OfferMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Customer;

class EmailController extends Controller
{
    public function sendEmail(){
        $page['page_title'] = 'All Email ';
        return view('admin.Email.sendEmail',compact('page'));
    }

    public function Email(){
        request()->validate(['userEmail' =>'required|email']);
        $details = [
            'title' => 'this is a test email title',
            'body' => Request('message')
        ];
        $customer = Customer::all('email');
        foreach($customer as $email){
            Mail::to($email)->send(new OfferMail($details));
        }
        
        return redirect('/admin-home/email')->with('message', 'email sent');



    }
    
    
    
}
