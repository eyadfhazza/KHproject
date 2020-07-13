@extends('layouts.app')

@section('content')


<div class="container">
    <div class="raw">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Payments</div>
                <div class="card-body">
                    @foreach($allpayments as $payments)
                    <div class="col-md-8">
                        <div class="alert alert-success" role="alert">
                            <button class="btn btn-danger float-right ml-3 "> حذف</button>
                            <button class="btn btn-info float-right "> تعديل</button>
                            <p>{{$payments->customer->first_name}}</p>
                            <p>{{$payments->amount}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection

