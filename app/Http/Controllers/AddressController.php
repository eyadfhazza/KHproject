<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{

    public function index(){

        $address=Address::with(['customer'])->paginate(5);
        return view('controller.Address.show_address')->with(['alladdress'=>$address]);
    }

    public  function delete(Request $request){
        $id=$request->input('address_id');
        Address::destroy($id);
        return redirect()->back();

    }
}
