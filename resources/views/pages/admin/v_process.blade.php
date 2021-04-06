@extends('layout.admin.v_layout')
@section('title','Data Management')
@section('link','Data Calculation')
@section('content')
<div class="container-fluid">
    <div class="card text-sm">
        <div class="card-header">
            Data Calculation
        </div>
        <div class="card-body">
            <a href="{{url('/process-add')}}" class="btn btn-primary"><i class="fas fa-plus mr-2"></i>Add New Process</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Process Code</th>
                        <th>Job Code</th>
                        <th>Total Process</th>
                        <th>Process Time</th>
                        <th>Total Time Process</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1;?>
                    @foreach ($process as $item)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$item->code}}</td>
                        <td>{{$item->job_code}}</td>
                        <td>{{$item->total_process}}</td>
                        <td>{{$item->process_time}}</td>
                        <td>{{$item->total_process * $item->process_time}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->updated_at}}</td>
                        <td>
                            <a href="{{url('/process-edit',$item->id)}}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                            <a href="{{url('/process-delete',$item->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
                <div class="card-footer text-right">
            {{$process->links()}}
        </div>
    </div>
     @include('sweetalert::alert')
</div>
@endsection