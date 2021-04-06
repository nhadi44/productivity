@extends('layout.staff.v_layout')
@section('title','Productivity Report')
@section('link','Report Data')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Update Report Data</h5>
        </div>
        <div class="card-body">
            <form action="{{url('/report-update',$report->id)}}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="Code" class="form-control-label">Report Code</label>
                        <input type="text" name="code" id="code" class="form-control" value="{{$report->code}}" readonly > 
                    </div>
                    <div class="form-group col-md-6">
                        <label for="Main Job Code" class="form-control-label">Main Job Code</label>
                        <select name="main_id" id="main_id" class="form-control">
                            <option value="{{$report->main_id}}">{{$report->main->code}}</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="Job Code" class="form-control-label">Job Code</label>
                        <select name="job_code" id="job_code" class="form-control">
                            <option value="{{$report->job_code}}">{{$report->job_code}}</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="Job Name" class="form-control-label">Job Name</label>
                        <select name="job_name" id="job_name" class="form-control">
                            <option value="{{$report->job_name}}">{{$report->job_name}}</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="Total Process" class="form-control-label">Total Process</label>
                        <input type="text" name="total_process" id="total_process" class="form-control" value="{{$report->total_process}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="Job Desc" class="form-control-label">Job Description</label>
                        <textarea name="job_desc" id="job_desc" cols="30" rows="3" class="form-control">{{$report->job_desc}}</textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" name="process_time" id="process_time" class="form-control" value="{{$report->process_time}}" hidden>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" name="ujob_id" name="ujob_id" class="form-control" value="{{$report->ujob_id}}" hidden>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" name="main_id" name="main_id" class="form-control" value="{{$report->main_id}}" hidden>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" name="created_at" name="created_at" class="form-control" value="{{$report->created_at}}" hidden>
                    </div>
                </div>
            <div class="card-footer">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection