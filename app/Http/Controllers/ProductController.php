<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductCreateRequest;
use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $viewPath = 'admin.product';
    public function index()
    {
        $page['page_title'] = "All Products - Table";
        $product = Product::all();
        return view("admin.product.index",compact(['product','page']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page['page_title'] = "All Products - Create";
        $categories = Category::all();
        return view("admin.product.create",compact(['page', 'categories']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductCreateRequest $request)
    {
        $prodSave = Product::create($request->all());
        return redirect()->back()->with('success','Product Has been created');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $page['page_title'] = "All Products - Edit";
        $categories = Category::all();
        return view($this->viewPath . '.edit', compact(['page','product', 'categories']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductCreateRequest $request, $id)
    {
        dd($request);
        $produpdate = Product::update($request->all());
        return redirect()->back()->with('success','Product Has been created');
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
