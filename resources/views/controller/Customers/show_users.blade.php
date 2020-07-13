@extends('layouts.app')

@section('content')


<div class="container">
<div class="raw">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Users</div>
            <div class="card-body">

                    @foreach($allusers as $user)
                        <div class="col-md-8">
                            <div class="alert alert-success" role="alert">
                                <button class="btn btn-danger float-right ml-3 "> حذف</button>
                                <button class="btn btn-info float-right "> تعديل</button>
                               <p>{{$user->first_name}}</p>
                            </div>
                        </div>
                     @endforeach

                {{$allusers->Links()}}
            </div>
            </div>
        </div>
    </div>
</div>
</div>>





@endsection
