<?php

namespace App\Http\Controllers;

use App\Mail\OfferMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
            'body' => 'this is a test body email'
        ];
        Mail::to("rozalpra@gmail.com")->send(new OfferMail($details));
        return redirect('/admin-home/email')->with('message', 'email sent');



    }
}
