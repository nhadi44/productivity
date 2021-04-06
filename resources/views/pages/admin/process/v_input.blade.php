@extends('layout.admin.v_layout')
@section('title','User Management')
@section('link','Add New Process')
@section('content')
<div class="container d-flex justify-content-center">
    <div class="card col-lg-7 text-sm">
        <div class="card-header">Add New Process</div>
        <div class="card-body">
            <form action="{{url('process-input')}}" method="POST">
                {{ csrf_field() }}
                {{-- <div class="form-group row">
                    <label for="addCode" class="col-sm-2 col-form-label">Code</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="code" id="code" placeholder="PRS001">
                    </div>
                </div> --}}
                <div class="form-group row">
                    <label for="addCode" class="col-sm-2 col-form-label">Job Code</label>
                    <div class="col-sm-9">
                        <select name="job_code" id="job_code" class="form-control">
                            @foreach ($main as $item)
                                <option value="{{$item->code}}">{{$item->code}} | {{$item->job_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="addMain" class="col-sm-2 col-form-label">Job Name</label>
                    <div class="col-sm-9">
                        <select name="main_id" id="main_id" class="form-control">
                            @foreach ($main as $item)
                                <option value="{{$item->id}}">{{$item->job_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="addProcess" class="col-sm-2 col-form-label">Total Process</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="total_process" name="total_process" placeholder="1">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="addTime" class="col-sm-2 col-form-label">Processing Time</label>
                    <div class="col-sm-4">
                        <select name="process_time" id="process_time" class="form-control">
                            @foreach ($main as $item)
                                <option value="{{$item->process_time}}">{{$item->process_time}} Minutes</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    
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