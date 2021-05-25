<?php

namespace App\Http\Controllers;

use App\Category_Measurement;
use App\measurement;
use Illuminate\Http\Request;

class DisplayOrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $page['page_title'] = 'All Order - Table';
        $measurement = measurement::all();
        $category_measure = Category_Measurement::all();
        foreach ($category_measure as $category){
            $allMeasure = $category;
        }
        return view('admin.order.index',compact('page','measurement', 'allMeasure'));
    }
    public function changeStatus($id){
        $change_status = measurement::findOrFail($id);
        if($change_status){
            $change_status->status += 1;
            $change_status->save();
        }
        return redirect()->back()->with('success','Status Has been Updated');

    }
    public function CancelStatus($id){
        $cancel = measurement::findOrFail($id);
        if($cancel){
            $cancel->status = 3;
            $cancel->save();
        }
        return redirect()->back()->with('success','The Product Has been Cancelled');
    }
    public function destroy($id)
    {
        $delCategory = measurement::findOrFail($id);
        $delCategory->delete();
        return redirect()->back();
    }
}
