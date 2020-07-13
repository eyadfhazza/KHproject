@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="raw">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Melas</div>
                    <div class="card-body">

                        @foreach($allmeals as $meal)
                            <div class="col-md-8">
                                <div class="alert alert-success" role="alert">
                                    <button class="btn btn-danger float-right ml-3 "> حذف</button>
                                    <button class="btn btn-info float-right "> تعديل</button>
                                    <h5>name:  {{$meal->name}} </h5>
                                    <p>cat:   {{$meal->category->name}}</p>
                                  {!! (count($meal->image) > 0 )? '<img class="img-thumbnail card-img" src="'. $meal->image[0]->url.'"/>':''!!}
                                </div>
                            </div>
                        @endforeach

                        {{$allmeals->Links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>>





@endsection
