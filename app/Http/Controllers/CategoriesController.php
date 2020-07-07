<?php

namespace App\Http\Controllers;

use App\categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(){

        $cats=categories::paginate();

        return view('Controller.Categories.show_categories')->with(['allcats'=>$cats]);
    }
}
