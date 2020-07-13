<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(){

        $payments=Payment::with('customer')->get();
        return view('Controller.Payments.show_payments')->with(['allpayments'=>$payments]);
    }
}
