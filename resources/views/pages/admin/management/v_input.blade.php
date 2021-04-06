@extends('layout.admin.v_layout')
@section('title','User Management')
@section('link','Add New User')
@section('content')
<div class="container d-flex justify-content-center">
    <div class="card col-7">
        <div class="card-header">
            <h5 class="card-title">
                User Register
            </h5>
        </div>
        <div class="card-body">
            <form action="{{url('/input-admin')}}" method="POST">
                {{ csrf_field() }}
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="Name" class="form-control-label">Name</label>
                        <select name="name" id="name" class="form-control">
                            <option value="0" selected disabled>-- Select Employee Name --</option>
                            @foreach ($employee as $item)
                            <option value="{{$item->name}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="Email" class="form-control-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="example@email.com">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="Password" class="form-control-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="password">
                    </div>
                </div>
                <div class="form-row">
                    <label for="Level" class="form-control-level">Level</label>
                    <select name="level" id="level" class="form-control">
                        <option value="0" selected disabled>-- Select User Level --</option>
                        <option value="1">Admin</option>
                        <option value="2">Staff</option>
                        <option value="3">Supervisor</option>
                    </select>
                </div>
                <div class="card-footer float-right mt-1" style="margin-right: -20px">
                    <button class="btn btn-primary" type="submit">Submit</button>
                    <a href="{{url('/umadmin')}}" class="btn btn-secondary">Cancel</a>
                </div>
        </div>
        </form>
    </div>
</div>
@endsection