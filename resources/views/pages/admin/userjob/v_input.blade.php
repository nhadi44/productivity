@extends('layout.admin.v_layout')
@section('title','Data Management')
@section('link','Add New User Job')
@section('content')
<div class="conainter d-flex justify-content-center">
    <div class="card col-lg-6 text-sm">
        <div class="card-header">Add New User</div>
        <div class="card-body mt-2">
            <form action="{{url('/input-job')}}" method="POST">
                {{ csrf_field() }}
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
                <div class="form-goup row">
                    <label for="inputDepart" class="col-sm-2 col-form-label text-right">Main Job Code</label>
                    <div class="col-sm-9">
                        <select name="main_id" id="main_id" class="form-control">
                            @foreach ($main as $item)
                            <option value="{{$item->id}}">{{$item->code}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="addJob" class="col-sm-2 col-form-label text-right">Job Name</label>
                    <div class="col-sm-9">
                        {{-- <input type="text" class="form-control" id="job_name" name="job_name" placeholder="Job Name"> --}}
                        <select name="job_name" id="job_name" class="form-control">
                            @foreach ($main as $item)
                            <option value="{{$item->job_name}}">{{$item->job_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                  <label for="addDesc" class="col-sm-2 col-form-label text-right">Job Description</label>
                  <div class="col-sm-9">
                    <textarea name="job_desc" id="job_desc" cols="30" rows="5" class="form-control"></textarea>
                  </div>
                </div>
                <div class="form-group row d-flex flex-row-reverse">
                    <a href="{{url('/data-management/user-job')}}" class="btn btn-secondary col-sm-2" style="margin-right: 58px">Cancel</a>
                    <button type="submit" class="btn btn-primary col-sm-2 mr-2">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection