<?php

namespace App\Http\Controllers;

use App\Category;
use App\Category_Measurement;
use Illuminate\Http\Request;

class CategoryMeasurementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $page['page_title'] = "All Category Measurement - Table";
        $category_measure = Category_Measurement::all();
        return view("admin.category_measurement.index", compact(['category_measure', 'page']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page['page_title'] = "All Products - Create";
//        $category_measure = Category_Measurement::all();
        $categories = Category::all();
        return view("admin.category_measurement.create", compact(['page','categories']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category_measure = Category_Measurement::create($request->all());
        return redirect()->back()->with('success', 'Category Measurement has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category_Measurement $category_measure)
    {
        $page['page_title'] = "All Categories Measurement - Edit";
        $categories = Category::all();
        return view("admin.category_measurement.edit", compact(['page', 'categories','category_measure']));
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
        $category_measure = Category_Measurement::findOrFail($id);

        $category_measure->update($request->all());
        return redirect()->back()->with('success', 'Category measurement Has been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category_measure = Category_Measurement::findOrFail($id);
        $category_measure->delete();
        return redirect()->back();
    }
}
