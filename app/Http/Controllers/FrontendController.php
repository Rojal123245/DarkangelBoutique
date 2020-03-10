<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('frontend.product-details',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
