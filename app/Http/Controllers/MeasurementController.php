<?php

namespace App\Http\Controllers;

use App\Category;
use App\measurement;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MeasurementController extends Controller
{
    public function saveData(Request $request)
    {
        $product = Product::where('id', $request->product_id)->get();
        foreach ($product as $prod){
            $request->request->add(['Product_name' => $prod->prod_name, 'Product_code' => $prod->uniqueCode]);
        }
        $category = Category::where('id', $request->category_id)->get();
        foreach ($category as $cat){
            $request->request->add(['category' => $cat->category_name]);
        }
        $request->request->remove('product_id');
        $request->request->remove('category_id');
        $measure = measurement::create($request->all());
        return redirect()->back()->with('success', 'Measurement has been created');
    }
}
