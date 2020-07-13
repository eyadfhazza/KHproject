<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(){

        $allroles=Role::paginate(4);

        return view('controller.Roles.show_roles')->with(['allroles'=>$allroles]);
    }

    public function store(Request $request){

        $request->validate(['role_name'=>'required']);

        $role=new Role();
        $role->role=$request->input('role_name');
        $role->save();
        return redirect()->back();
    }

    public function  delete(Request $request){
        $id=$request->input('role_id');
        Role::destroy($id);
        return redirect()->back();

    }
}
