<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    public function index(){
        $users=\App\User::paginate(20);
        return view('controller.Customers.show_users')->with(['allusers'=>$users]);
    }
}
