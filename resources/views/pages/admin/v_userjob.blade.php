@extends('layout.admin.v_layout')
@section('title','List User Job')
@section('link','Data management')
@section('content')
<div class="container-fluid">
    <div class="card text-sm">
        <div class="card-header">
            User Job List
        </div>
        <div class="card-body">
            <div class="col-sm-12">
                <a href="{{url('/add-job')}}" class="btn btn-primary"><i class="fas fa-plus mr-2"></i>Add New User Job List</a>
                <table class="table mt-2">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Job Description</th>
                            <th>Created At</th>
                            <th>Update At</th>
                            <th>User ID</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1;?>
                        @foreach ($ujob as $item)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$item->code}}</td>
                            <td>{{$item->job_name}}</td>   
                            <td>{{$item->job_desc}}</td>
                            <td>{{$item->created_at}}</td>
                            <td>{{$item->updated_at}}</td>
                            <td>{{$item->user->name}}</td>
                            <td>
                                <a href="{{url('/edit-job',$item->id)}}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                <a href="{{url('/delete-job',$item->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
</div>
@endsection
