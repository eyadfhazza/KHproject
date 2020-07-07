<?php

namespace App\Http\Controllers;

use App\Meal;
use Illuminate\Http\Request;

class MealController extends Controller
{
    public function index(){
        $meals=Meal::with(['category','image'])->paginate(20);
        return view('Controller.Meals.show_meals')->with(['allmeals'=>$meals]);
    }
}
