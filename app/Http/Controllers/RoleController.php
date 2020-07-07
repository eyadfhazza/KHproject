<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(){

        $allroles=Role::with('customer','order')->paginate(2);

        return view('controller.Roles.show_roles')->with(['allroles'=>$allroles]);
    }
}
