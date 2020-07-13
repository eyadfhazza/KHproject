@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="raw">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Melas</div>
                    <div class="card-body">

                        </div>
                        @foreach($alladdress as $address)
                            <div class="col-md-8">
                                <div class="alert alert-success" role="alert">
                                    <form action="{{route('address')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="_method" value="delete">
                                        <input type="hidden" name="address_id" value="{{$address->id}}">
                                        <button type="submit" class="btn btn-danger float-right ml-3 "> حذف</button>
                                    </form>

                                    <button class="btn btn-info float-right "> تعديل</button>
                                    <h5>Address:  {{$address->description}} </h5>

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
