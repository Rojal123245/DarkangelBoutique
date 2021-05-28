<?php

namespace App\Http\Controllers;

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
        Mail::raw('It works!', function ($message){
            $message->to(request('userEmail'))
            ->subject('Hello There');

        });

        return redirect('/admin-home/email');



    }
}
