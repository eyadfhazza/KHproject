<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(){

        $payments=Payment::all();
        return view('Controller.Payments.show_payments')->with(['allpayments'=>$payments]);
    }
}
