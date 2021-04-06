@extends('layout.admin.v_layout')
@section('title','Main Job')
@section('link','Data Management')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            Main Job List
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <a href="{{url('/add-main')}}"class="btn btn-primary"><i class="fas fa-plus mr-2"></i>Add New Main Job List</a>
                    <table class="table mt-2 text-sm">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Code</th>
                                <th>Name Job</th>
                                <th>Job Description</th>
                                <th>Process Time (in minutes)</th>
                                <th>Departement ID</th>
                                <th>Created At</th>
                                <th>Update At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($main as $item)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$item->code}}</td>
                                <td>{{$item->job_name}}</td>
                                <td>{{$item->job_desc}}</td>
                                <td>{{$item->process_time}}</td>
                                <td>{{$item->depart->nama}}</td>
                                <td>{{$item->created_at}}</td>
                                <td>{{$item->updated_at}}</td>
                                <td>
                                    <a href="{{url('/edit-main',$item->id)}}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                    <a href="{{url('/delete-main',$item->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card-footer text-right">
            {{$main->links()}}
        </div>
    </div>
    @include('sweetalert::alert')
</div>
@endsection