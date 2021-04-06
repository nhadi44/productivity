@extends('layout.admin.v_layout')
@section('title','Department')
@section('link','Add New Department List')
@section('content')
<div class="conainter d-flex justify-content-center">
    <div class="card col-lg-6">
        <div class="card-header">Update Employee</div>
        <div class="card-body mt-2">
            <form action="{{url('/update-employee',$employee->id)}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="editID" class="col-sm-2 col-form-label text-right">ID</label>
                    <div class="col-sm-4 ml-2">
                        <input type="text" class="form-control-plaintext" id="id" name="id" value="{{$employee->id}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmployee" class="col-sm-2 col-form-label text-right">Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="name" name="name" value="{{$employee->name}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputGender" class="col-sm-2 col-form-label text-right">Gender</label>
                    <div class="col-sm-9">
                        <select name="gender" id="gender" class="form-control">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputStart" class="col-sm-2 col-form-label text-right">Starting Contract</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" id="start_contract"  name="start_contract" value="{{$employee->start_contract}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEnd" class="col-sm-2 col-form-label text-right">Ending Contract</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" id="end_contract"  name="end_contract" value="{{$employee->end_contract}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputTitle" class="col-sm-2 col-form-label text-right">Job Title</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="title_job" name="title_job" value="{{$employee->title_job}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputGender" class="col-sm-2 col-form-label text-right">Departr ID</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="depart_id" name="depart_id">
                            @foreach ($depart as $item => $value)
                            <option value="{{$value->id}}">{{$value->id}}</option>
                             @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row d-flex flex-row-reverse">
                    <a href="{{url('/employee')}}" class="btn btn-secondary col-sm-2" style="margin-right: 58px">Cancel</a>
                    <button type="submit" class="btn btn-primary col-sm-2 mr-2">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection