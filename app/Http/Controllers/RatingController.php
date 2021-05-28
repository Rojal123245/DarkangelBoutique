<?php

namespace App\Http\Controllers;

use App\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function saveRating(Request $request){

        session_start();
//        if($_SESSION['useremail']) {
        if (array_key_exists('useremail',$_SESSION)){
            $checkuser = Rating::where('useremail', $_SESSION['useremail']);
            if($checkuser){
                $request->request->remove('_token');
                $checkuser->update($request->all());
                return response()->json(['login' => 1, 'success' => 'Thankyou for the rating']);
            }else {
                $ratingData = new Rating();
                $ratingData->rating = $request->rating;
                $ratingData->product_id = $request->product_id;
                $ratingData->useremail = $_SESSION['useremail'];
                $ratingData->save();
//            return redirect()->back()->with('success', 'Thankyou for the rating');
                return response()->json(['login' => 1, 'success' => 'Thankyou for the rating']);
            }
        }else{
//            return view('customer.login')->render();
            return response()->json(['login' => 0]);
        }
    }
}

