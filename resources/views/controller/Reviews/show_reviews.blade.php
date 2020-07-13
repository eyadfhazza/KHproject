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
                                    <form action="{{route('reviews')}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="_method" value="delete">
                                        <input type="hidden" name="rev_id" value="{{$review->id}}">
                                        <button type="submit" class="btn btn-danger float-right ml-3 "> حذف</button>
                                    </form>
                                    <button class="btn btn-info float-right "> تعديل</button>

                                    <h5>{{$review->customer->first_name}} {{$review->customer->last_name}}</h5>
                                    <h5>{{$review->meal->name}}</h5>
                                    <p>{{$review->review}}</p>
                                    <p>{{$review->stars}} <i class="fas fa-star"></i></p>
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

