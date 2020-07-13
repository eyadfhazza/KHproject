<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public  function index(){

        $reviewes=Review::with(['customer','meal'])->paginate(5);

        return view('Controller.Reviews.show_reviews')->with(['allreviews'=> $reviewes]);
    }
    public function store(Request $request){
        $reviews=new Review();
        $reviews->user_id=$request->input('user_id');
        $reviews->meal_id=$request->input('meal_id');
        $reviews->review=$request->input('review');
        $reviews->stars=$request->input('stars');
        $reviews->save();
        return redirect()->back();
    }

    public function delete(Request $request){

        $id=$request->input('rev_id');
        Review::destroy($id);
        return redirect()->back();


    }
}
