<?php

namespace App\Http\Controllers;

use App\Category_Measurement;
use App\Product;
use App\Rating;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class SearchFunctionalityController extends Controller{
    public function index(){
        $q = Request('q');

        if($q != null){
            $user = Product::where('prod_name', 'LIKE', '%' . $q . '%')
                ->orWhere('uniqueCode', 'LIKE', '%' . $q . '%')
                ->get();
            $category_measure = Category_Measurement::all();
            if(count($user) >0) {
                foreach ($user as $product) {
                    $product_related_ratings = DB::table('ratings')->where('product_id', '=', $product->id)->get();
                    $allRatings = $product_related_ratings->count();

                    $ratings = Rating::select('rating', 'product_id')->get();
                    $totalRating = 0;
                    foreach ($ratings as $rate) {
                        if ($product->id == $rate->product_id) {
                            $totalRating += $rate->rating;
                        } else {
                            $totalRating = 1;
                        }
                    }
                    if ($allRatings == 0) {
                        $displayRating = 0;
                    } else {
                        $displayRating = $totalRating / $allRatings;
                    }
                    return view('frontend.product-details', compact(['product', 'category_measure', 'displayRating']));
                }
            }
        }else{
            return back()->with('message',"No product found");
        }
        return view('search.index')->withMessage("No Product Found");

    }

}


