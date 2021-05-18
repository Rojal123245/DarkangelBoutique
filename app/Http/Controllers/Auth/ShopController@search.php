<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class SearchFunctionalityController extends Controller{
    public function index(){
        $q = Input::get ( 'q' );
        if($q != ""){
            $user = User::where ( 'name', 'LIKE', '%' . $q . '%')
                ->orWhere ('email', 'LIKE', '%' . $q . '%' )->get ();
            if(count ($user ) > 0)
                return view ( 'search-functionality-in-laravel/layout' )->withDetails ($q);
        }
        return view ( 'search-functionality-in-laravel/layout')->withMessage ('No Detail found. Try to search again !');
    }
}

//public function search(Request $request)
//{
//    return view('search-results');
//}
