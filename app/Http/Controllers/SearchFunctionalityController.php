<?php

namespace App\Http\Controllers;

use App\Category_Measurement;
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
            $category_measure = Category_Measurement::all();
            if(count($user) >0)
                foreach ($user as $product) {
                    return view('frontend.product-details', compact(['product', 'category_measure']));
                }
        }
        return view('search.index')->withMessage("No Product Found");

    }

}


