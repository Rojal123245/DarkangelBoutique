<?php

namespace App\Http\Controllers;

use App\Category;
use App\Customer;
use App\Http\Requests\CustomerCreateRequest;
use App\Product;
use Illuminate\Http\Request;
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
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('frontend.product-details',compact('product'));
    }
    public function userlogin(){
        return view('frontend.loginregister');
    }
    public function userRegister(){
        return view('frontend.register');
    }
    public function saveLogin(Request $request)
    {
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
    public function saveRegister(CustomerCreateRequest $request){
        $password = Hash::make($request->password);
        $request->merge(['password' => $password]);
        $customerSave = Customer::create($request->all());
        return redirect()->back()->with('success','Registration Successful');
    }
}
