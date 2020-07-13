<?php

namespace App\Http\Controllers;

use App\categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class CategoriesController extends Controller
{
    public function index(){

        $cats=categories::paginate(2);

        return view('Controller.Categories.show_categories')->with(['allcats'=>$cats]);
    }

    public function store(Request $request){

        $request->validate(
            ['cat_name'=>'required']
        );

        $categories=new categories();
        $categories->name=$request->input('cat_name');
        $categories->save();
        Session::flash('message','تمت عملية الإضافة بنجاح');
        return redirect()->back();
    }

    public  function delete(Request $request){
        $id=$request->input('cat_id');
        categories::destroy($id);
        return redirect()->back();

    }
}
