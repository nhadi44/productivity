@extends('layout.admin.v_layout')
@section('title','Employee Data')
@section('link','Add New Employee')
@section('content')
<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      Employee List
    </div>
    <div class="card-body">
      <a href="{{url('/add')}}" class="btn btn-primary mb-3"><i class="fas fa-plus mr-2"></i>Add New Employee</a>
      <table class="table table-hover text-nowrap">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Gender</th>
            <th>Starting Contract</th>
            <th>Ending Contract</th>
            <th>Job Title</th>
            <th>Department</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($employee as $item)
          <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->gender}}</td>
            <td>{{$item->start_contract}}</td>
            <td>{{$item->end_contract}}</td>
            <td>{{$item->title_job}}</td>
            <td>{{$item->depart->nama}}</td>
            <td>{{$item->created_at}}</td>
            <td>{{$item->updated_at}}</td>
            <td>
              <a href="{{url('/edit-employee',$item->id)}}" class="btn btn-success"><i class="fas fa-edit"></i></a>
              <a href="{{url('/delete-employee',$item->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      @include('sweetalert::alert')
    </div>
    <div class="card-footer text-right">
      {{$employee->links()}}
    </div>
  </div>
</div>
<!-- /.card-body -->
@endsection