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
}
