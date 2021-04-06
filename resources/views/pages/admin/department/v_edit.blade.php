@extends('layout.admin.v_layout')
@section('title','Department')
@section('link','Add New Department List')
@section('content')
<div class="conainter d-flex justify-content-center">
    <div class="card col-lg-6">
        <div class="card-header">Add New Department List</div>
        <div class="card-body mt-2">
            <form action="{{url('/update-depart',$depart->id)}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="inputID" class="col-sm-2 col-form-label text-right">ID</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control-plaintext ml-2" id="id" name="id" value="{{$depart->id}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label text-right">Code</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="code"  name="code" value="{{$depart->code}}" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label text-right">Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama"  name="nama" value="{{$depart->nama}}">
                    </div>
                </div>
                <div class="form-group row d-flex flex-row-reverse">
                    <a href="{{url('/data-management/department')}}" class="btn btn-secondary col-sm-2" style="margin-right: 58px">Cancel</a>
                    <button type="submit" class="btn btn-primary col-sm-2 mr-2">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection