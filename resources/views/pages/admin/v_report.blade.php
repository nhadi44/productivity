@extends('layout.admin.v_layout')
@section('title','Productivity Report')
@section('link','Report Data')
@section('content')
     @include('pages.admin.v_detail')
     <div class="container">
         <div class="row">
            <table class="table">
                <tr>
                    <th>No</th>
                    <th>ID Report</th>
                    <th>ID User</th>
                    <th>Name</th>
                    <th>Report Date</th>
                    <th>Prductivity</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <th>1</th>
                    <td>RPT001</td>
                    <td>IT0001</td>
                    <td>Hadi Nurhidayat</td>
                    <td>12 Februari 2021</td>
                    <td>80%</td>
                    <td>
                        <a href="#" data-toggle="modal" data-target="#reportDetails" class="btn btn-success col-4">Detail</a>
                        <a href="#" data-toggle="modal" data-target="#edit" class="btn btn-danger col-4">Edit</a>
                    </td>
                </tr>
              </table>
         </div>
     </div>
@endsection