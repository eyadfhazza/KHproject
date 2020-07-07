@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="raw">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Melas</div>
                    <div class="card-body">

                        @foreach($alladdress as $addres)
                            <div class="col-md-8">
                                <div class="alert alert-success" role="alert">
                                    <h5>Address:  {{$addres->description}} </h5>



                                </div>
                            </div>
                        @endforeach

                        {{$alladdress->Links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>>





@endsection
