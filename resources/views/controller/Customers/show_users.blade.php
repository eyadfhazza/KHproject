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
