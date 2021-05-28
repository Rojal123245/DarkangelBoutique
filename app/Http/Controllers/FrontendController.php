<?php

namespace App\Http\Controllers;

use App\Category;
use App\Category_Measurement;
use App\Customer;
use App\Http\Requests\CustomerCreateRequest;
use App\Product;
use App\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prod_data = Product::all(['id','prod_name','prod_price', 'cover_img'])->take(21);
        /*dd($prod_data);*/
        return view('frontend.home',compact('prod_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function shopData()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('frontend.shop',compact('categories', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Category $category
     * @return \Illuminate\Http\Response
     */
    public function shopProd(Category $category)
    {
        $allCategories = Category::all();
        return view('frontend.shop-details',compact('allCategories', 'category'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        $category_measure = Category_Measurement::all();
        $product_related_ratings = DB::table('ratings')->where('product_id','=', $id)->get();
        $allRatings = $product_related_ratings->count();

        $ratings = Rating::select('rating', 'product_id')->get();
        $totalRating =0;
        foreach ($ratings as $rate){
            if($id == $rate->product_id) {
                $totalRating += $rate->rating;
            }else{
                $totalRating = 1;
            }
        }
        if($allRatings == 0){
            $displayRating = 0;
        }else{
            $displayRating = $totalRating/$allRatings;
        }
        return view('frontend.product-details',compact('product', 'category_measure', 'displayRating'));
    }
    public function contact(){
        return view('frontend.contactus');
    }
}
