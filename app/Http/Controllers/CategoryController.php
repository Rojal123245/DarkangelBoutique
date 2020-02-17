<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategoryCreateRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $viewPath = 'admin.category';

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page['page_title'] = 'All Category - Table';
        $categories = Category::all();
        return view($this->viewPath . '.index',compact('page','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page['page_title'] = 'Category - Create';
        return view($this->viewPath . '.create',compact('page'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryCreateRequest $request)
    {
        $categorySave = Category::create($request->all());
        return redirect()->back()->with('success','Category Has been created');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Category $category
     * @return void
     */
    public function edit(Category $category)
    {
        $page['page_title'] = "Category - Edit";
        return view($this->viewPath . '.edit', compact(['page', 'category']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryCreateRequest $request, $id)
    {
        $categories = Category::findOrFail($id);
        $categories->update($request->all());
        return redirect()->back()->with('success','Category Has been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delCategory = Category::findOrFail($id);
        $delCategory->delete();
        return redirect()->back();
    }
}
