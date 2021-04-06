@extends('layout.staff.v_layout')
@section('title','Home')
@section('link','Dashboard')
@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
     <div class="col-md-12">
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Wellcome {{Auth::user()->name}}!</h1>
          <p class="lead">You are Staff of the Lippo Life Productivity Report System.</p>
          <a href="{{url('/report-new')}}" class="btn btn-primary">Add New Productivity Report</a>
        </div>
      </div>
     </div>
    </div>
  </div>
</section>
@endsection