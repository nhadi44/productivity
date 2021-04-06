@extends('layout.admin.v_layout')
@section('title','Data Management')
@section('link','Data Calculation')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Test Create Code</div>
        <div class="card-body">
            <form action="{{url('/test-add')}}" method="POST">
                <div class="form-group row">
                    <label for="addCode" class="col-sm-2 col-form-label">Code</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="code" name="code" placeholder="Code">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection