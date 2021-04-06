@extends('layout.admin.v_layout')
@section('title','User Management')
@section('link','Update Administrator')
@section('content')
<div class="conainter d-flex justify-content-center">
    <div class="card col-lg-6">
        <div class="card-header">Update Administrator</div>
        <div class="card-body mt-2">
            <form action="{{url('/update-admin',$madmin->id)}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="inputUsername" class="col-sm-2 col-form-label text-right">Username</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control-plaintext ml-2" id="id" name="id" value="{{$madmin->id}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputUsername" class="col-sm-2 col-form-label text-right">Username</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="username" name="username" value="{{$madmin->username}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label text-right">password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputLevel" class="col-sm-2 col-form-label text-right">Level</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="level" name="level">
                            <option value="admin">Admin</option>
                            <option value="staff">Staff</option>
                            <option value="spv">Supervisor</option>
                            <option value="manager">Manager</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label text-right">Employee</label>
                    <div class="col-sm-9">
                        <select name="user_id" id="user_id" class="form-control">
                            @foreach ($employee as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row d-flex flex-row-reverse">
                    <a href="{{url('/umadmin')}}" class="btn btn-secondary col-sm-2" style="margin-right: 58px">Cancel</a>
                    <button type="submit" class="btn btn-primary col-sm-2 mr-2">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection