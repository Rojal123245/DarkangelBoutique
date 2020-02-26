<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductCreateRequest;
use App\Product;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    protected $viewPath = 'admin.product';

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $page['page_title'] = "All Products - Table";
        $product = Product::all();
        return view("admin.product.index", compact(['product', 'page']));
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
        return view("admin.product.create", compact(['page', 'categories']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return Response
     */
    public function store(ProductCreateRequest $request)
    {
        $cover = $request->file('cover_img');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('local')->put('public/' . $cover->getFilename().'.'.$extension,  File::get($cover));
        if($request->hasfile('prod_img'))
        {

            foreach($request->file('prod_img') as $image)
            {
                $name= time() . $image->getClientOriginalName();
                $image->move(public_path().'/multiImages/', $name);
                $data[] = $name;
            }
        }
        $product = new Product();
        $product->prod_name = $request->prod_name;
        $product->prod_price = $request->prod_price;
        $product->prod_type = $request->prod_type;
        $product->prod_desc = $request->prod_desc;
        $product->category_id = $request->categories_id;
        $product->status = $request->status;
        $product->cover_img = $cover->getFilename(). '.' . $extension;
        $product->prod_img = json_encode($data);
        $product->save();

        return redirect()->back()->with('success', 'Product Has been created');


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
        return view($this->viewPath . '.edit', compact(['page', 'product', 'categories']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return Response
     */
    public function update(ProductCreateRequest $request, $id)
    {
        $product = Product::findOrFail($id);


        $product->update($request->all());
        return redirect()->back()->with('success', 'Product Has been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->back();
    }
}
