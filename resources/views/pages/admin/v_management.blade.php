@extends('layout.admin.v_layout')
@section('title','User Management')
@section('link','Administrator')
@section('content')
<div class="container-fluid">
  <div class="card text-sm">
    <div class="card-header">
      Administrator List
    </div>
    <div class="card-body">
      <a href="{{url("/add-admin")}}" class="btn btn-primary"><i class="fas fa-plus mr-2"></i>Add New Administrator</a>
      <table class="table text-sm">
        <thead>
          <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Level</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @php
              $no = 1;
          @endphp
          @foreach ($user as $item)
              <tr>
                <td>{{$no++}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->password}}</td>
                <td>{{$item->level}}</td>
                <td>{{$item->created_at->format('d/m/Y')}}</td>
                <td>{{$item->updated_at->format('d/m/Y')}}</td>
                <td>
                  <a href="{{url("/edit-admin",$item->id)}}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                  <a href="{{url('/delete-admin',$item->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                </td>
              </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  @include('sweetalert::alert')
</div>
@endsection