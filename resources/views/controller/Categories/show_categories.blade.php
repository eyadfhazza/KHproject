@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="raw">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Categories</div>
                    <div class="card-body">

                            @foreach($allcats as $cats)
                                <div class="col-md-8">
                                    <div class="alert alert-success" role="alert">
                                        <p>{{$cats->name}}</p>
                                    </div>
                                </div>
                            @endforeach

                        {{$allcats->Links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection

