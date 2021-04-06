@extends('layout.admin.v_layout')
@section('title','Department')
@section('link','Data Management')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Department List
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <a href="{{url('/input')}}"class="btn btn-primary"><i class="fas fa-plus mr-2"></i>Add New Department List</a>
                    <table class="table mt-2">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Department Code</th>
                                <th>Department Name</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($depart as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->code}}</td>
                                <td>{{$data->nama}}</td>
                                <td>{{$data->created_at}}</td>
                                <td>{{$data->updated_at}}</td>
                                <td>
                                    <a href="{{url('/edit-depart',$data->id)}}" class="btn btn-success col-sm-4"><i class="fas fa-edit"></i></a>
                                    <a href="{{url('/delete-depart',$data->id)}}" class="btn btn-danger col-sm-4"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card-footer text-right">
            {{$depart->links()}}
        </div>
    </div>
    @include('sweetalert::alert')
</div>
@endsection