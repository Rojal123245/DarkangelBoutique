<?php

namespace App\Http\Controllers;

use App\Product;
use App\User;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class SearchFunctionalityController extends Controller{
    public function index(){
        $q = Request('q');

        if($q != " "){
            $user = Product::where('prod_name', 'LIKE', '%' . $q . '%')
                ->orWhere('uniqueCode', 'LIKE', '%' . $q . '%')
                ->get();
            if(count($user) >0)
                return view('search.index')->withDetails($user)->withQuery($q);

        }
        return view('search.index')->withMessage("No Product Found");

    }

}


