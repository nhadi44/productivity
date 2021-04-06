@extends('layout.admin.v_layout')
@section('title','Main Job')
@section('link','Data Management')
@section('content')
<div class="conatainer d-flex justify-content-center">
    <div class="col-lg-7">
        <div class="card text-sm">
            <div class="card-header">
                Add New Main Job
            </div>
            <div class="card-body">
                <form action="{{url('/update-main',$main->id)}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label for="editId" class="col-sm-2 col-form-label text-right">No</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control-plaintext" id="id" name="id" value="{{$main->id}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="editCode" class="col-sm-2 col-form-label text-right">Code</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="code" name="code" value="{{$main->code}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="editName" class="col-sm-2 col-form-label text-right">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="job_name" name="job_name" value="{{$main->job_name}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="editDesc" class="col-sm-2 col-form-label text-right">Job Description</label>
                        <div class="col">
                            <textarea name="job_desc" id="job_desc" cols="68" rows="3" class="form-control">{{$main->job_desc}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="editTime" class="col-sm-2 col-form-label text-right">Process Time</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="process_time" name="process_time" value="{{$main->process_time}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="editDepart" class="col-sm-2 col-form-label text-right">Department</label>
                        <div class="col-sm-2">
                            <select name="depart_id" id="depart_id" class="form-control">
                                @foreach ($depart as $item)
                                    <option value="{{$item->id}}">{{$item->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="editCreated" class="col-sm-2 col-form-label text-right">Created At</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control-plaintext" id="created_at" name="created_at" value="{{$main->created_at}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="editUpdated" class="col-sm-2 col-form-label text-right">Updated At</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control-plaintext" id="updated_at" name="updated_at" value="{{$main->updated_at}}">
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