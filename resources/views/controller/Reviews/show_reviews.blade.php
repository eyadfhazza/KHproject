@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="raw">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Reviews</div>
                    <div class="card-body">

                        @foreach($allreviews as $review)
                            <div class="col-md-8">
                                <div class="alert alert-success" role="alert">
                                    <h5>{{$review->customer->first_name}} {{$review->customer->last_name}}</h5>
                                    <p>{{$review->review}}</p>
                                    <p>{{$review->stars}}</p>
                                    <p>{{$review->formattedtime()}}</p>
                                </div>
                            </div>
                        @endforeach

                        {{$allreviews->Links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection

