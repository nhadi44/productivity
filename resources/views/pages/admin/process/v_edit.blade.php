@extends('layout.admin.v_layout')
@section('title','User Management')
@section('link','Add New Process')
@section('content')
<div class="container d-flex justify-content-center">
    <div class="card col-lg-7 text-sm">
        <div class="card-header">Add New Process</div>
        <div class="card-body">
            <form action="{{url('/process-update',$process->id)}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="addCode" class="col-sm-2 col-form-label">Code</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="code" id="code" value="{{$process->code}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="addCode" class="col-sm-2 col-form-label">Job Code</label>
                    <div class="col-sm-3">
                        <select name="job_code" id="job_code" class="form-control">
                                <option value="{{$process->job_code}}">{{$process->job_code}}</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="addMain" class="col-sm-2 col-form-label">Job Name</label>
                    <div class="col-sm-9">
                        <select name="main_id" id="main_id" class="form-control">
                                <option value="{{$process->main->id}}">{{$process->main->job_name}}</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="addProcess" class="col-sm-2 col-form-label">Total Process</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="total_process" name="total_process" value="{{$process->total_process}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="addTime" class="col-sm-2 col-form-label">Processing Time</label>
                    <div class="col-sm-4">
                        <select name="process_time" id="process_time" class="form-control">
                                <option value="{{$process->main->process_time}}">{{$process->main->process_time}} Minutes</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="editCreate" class="col-sm-2 col-form-label">Created At</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control-plaintext" name="created_at" id="created_at" value="{{$process->created_at}}" readonly>
                    </div>
                </div>
                <div class="form-group row d-flex flex-row-reverse">
                    <a href="{{url('/process')}}" class="btn btn-secondary col-sm-2" style="margin-right: 58px">Cancel</a>
                    <button type="submit" class="btn btn-primary col-sm-2 mr-2">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection