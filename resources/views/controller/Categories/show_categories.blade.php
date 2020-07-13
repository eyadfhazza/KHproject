
@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="raw col-md-12">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="font-size: 30px">الفــئــات</div>
                    <div class="card-body " >

                        <form action="{{route('categories')}}"  method="POST" class="row">
                            @csrf

                            <div class="column col-md-8">
                                <div class="alert alert-success" role="alert">
                                    <label for="exampleInputPassword1" class="ml-3">فئة جديدة</label>
                                    <input type="text" class="form-control" id="cat_name" name="cat_name" placeholder="اسم الفئة" required>
                                    <button  type="submit" class="btn btn-primary mt-2">إضافة</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div>
                            @foreach($allcats as $cats)
                        <div class="column col-md-8">
                            <div class="alert alert-success" role="alert" >
                                <form action="{{route('categories')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="delete">
                                    <input type="hidden" name="cat_id" value="{{$cats->id}}">
                                    <button type="submit" class="btn btn-danger float-right ml-3 "> حذف</button>
                                </form>

                            <button class="btn btn-info float-right "> تعديل</button>
                            <h4>{{$cats->name}}</h4>
                            </div>
                            @endforeach

                        {{$allcats->Links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="toast" style="position: absolute; top: 8%; right: 5%;">
            <div class="toast-header">
                <strong class="mr-auto"></strong>
                <small>11 mins ago</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
               @if(\Illuminate\Support\Facades\Session::has('message'))
                   {{\Illuminate\Support\Facades\Session::get('message')}}
                    @endif
            </div>
        </div>


@endsection
@if(\Illuminate\Support\Facades\Session::has('message'))
@section('script')
<script>

    jquery(document).ready(function ($) {

        var $toast=$('.toast').toast({
            autohide:false
        });

        $('.toast').toast('show');

    })</script>
@endsection
    @endif


