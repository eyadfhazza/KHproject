@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="raw">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Categories</div>
                    <div class="card-body">

                        @foreach($allroles as $role)
                            <div class="col-md-8">
                                <div class="alert alert-success" role="alert">
                                    <p>{{$role->role}}</p>
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

