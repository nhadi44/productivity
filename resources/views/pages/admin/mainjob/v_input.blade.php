@extends('layout.admin.v_layout')
@section('title','Main Job')
@section('link','Data Management')
@section('content')
<div class="conatainer d-flex justify-content-center">
    <div class="col-lg-7">
        <div class="card">
            <div class="card-header">
                Add New Main Job
            </div>
            <div class="card-body">
                <form action="{{url('/input-main')}}" method="POST">
                    {{ csrf_field() }}
                    {{-- <div class="form-group row">
                        <label for="addCode" class="col-sm-2 col-form-label text-right">Code</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="code" name="code" placeholder="Code">
                        </div>
                    </div> --}}
                    <div class="form-group row">
                        <label for="addName" class="col-sm-2 col-form-label text-right">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="job_name" name="job_name" placeholder="Main Job Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="addDesc" class="col-sm-2 col-form-label text-right">Job Description</label>
                        <div class="col">
                            <textarea name="job_desc" id="job_desc" cols="68" rows="3" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="addTime" class="col-sm-2 col-form-label text-right">Process Time</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="process_time" name="process_time" placeholder="Time">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="addDepart" class="col-sm-2 col-form-label text-right">Department</label>
                        <div class="col-sm-4">
                            <select name="depart_id" id="depart_id" class="form-control">
                                @foreach ($depart as $item)
                                    <option value="{{$item->id}}">{{$item->code}} | {{$item->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row d-flex flex-row-reverse">
                        <a href="{{url('/data-management/main-job')}}" class="btn btn-secondary col-sm-2" style="margin-right: 58px">Cancel</a>
                        <button type="submit" class="btn btn-primary col-sm-2 mr-2">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection