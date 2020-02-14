<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductCreateRequest;
use App\Product;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
     * @return Response
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
     * @return Response
     */
    public function store(ProductCreateRequest $request)
    {
        $prodSave = Product::create($request->all());
        return redirect()->back()->with('success','Product Has been created');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @return Response
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
     * @return Response
     */
    public function update(ProductCreateRequest $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return redirect()->back()->with('success','Product Has been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->back();
    }
}
