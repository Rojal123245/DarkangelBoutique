<?php

namespace App\Http\Controllers;

use App\Category_Measurement;
use App\measurement;
use Illuminate\Http\Request;

class DisplayOrderController extends Controller
{
    public function index(){
        $page['page_title'] = 'All Order - Table';
        $measurement = measurement::all();
        $category_measure = Category_Measurement::all();
        foreach ($category_measure as $category){
            $allMeasure = $category;
        }
        return view('admin.order.index',compact('page','measurement', 'allMeasure'));
    }
}
