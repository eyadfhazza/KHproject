@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="raw">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">الادوار</div>
                    <div class="card-body">
                        <form action="{{route('roles')}}"  method="POST" class="row">
                            @csrf
                                <div class="column col-md-8">
                                <div class="alert alert-success" role="alert">
                                    <label for="exampleInputPassword1" class="ml-3">دور جديد</label>
                                    <input type="text" class="form-control" id="role_name" name="role_name" placeholder="اسم الدور" required>
                                    <button  type="submit" class="btn btn-primary mt-2">إضافة</button>
                                </div>
                            </div>

                        </form>

                            </div>
                        @foreach($allroles as $role)
                                <div class="col-md-8">
                                    <div class="alert alert-success" role="alert">
                                        <form action="{{route('roles')}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="_method" value="delete">
                                            <input type="hidden" name="role_id" value="{{$role->id}}">
                                            <button class="btn btn-danger float-right ml-3 "> حذف</button>
                                        </form>

                                        <button class="btn btn-info float-right "> تعديل</button>
                                    <h4>{{$role->role}}</h4>

                                </div>
                            </div>
                        @endforeach
                    {{$allroles->Links()}}


                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection

