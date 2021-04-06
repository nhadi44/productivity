@extends('layout.admin.v_layout')
@section('title','Data Management')
@section('link','Data management')
@section('content')
     <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">Department</div>
                    <div class="card-body">
                        <p class="card-text">List of department in Lippo Life Aassurance. Click more info to add, update or delete departmen list.</p>
                        <a href="{{url('/data-management/department')}}" class="btn btn-primary">More Info</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">Main Job</div>
                    <div class="card-body">
                        <p class="card-text">List of Main Job In Lippo Life Aassurance. Click more info to add, update or delete main job list.</p>
                        <a href="{{url('/data-management/main-job')}}" class="btn btn-primary">More Info</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">User Job</div>
                    <div class="card-body">
                        <p class="card-text">List of User job in Lippo Life Assurance. Click more to add, update or delete user job list. </p>
                        <a href="{{url('/data-management/user-job')}}" class="btn btn-primary">More Info</a>
                    </div>
                </div>
            </div>
            {{-- <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">Data Calculation</div>
                    <div class="card-body">
                        <p class="card-text">Process of Calculating the Productivity Report Data. Click more to add, update or delete processing data.</p>
                        <a href="{{url('/process')}}" class="btn btn-primary">More Info</a>
                    </div>
                </div>
            </div> --}}
        </div>
     </div>
@endsection