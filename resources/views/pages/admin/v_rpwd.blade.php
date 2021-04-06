@extends('layout.admin.v_layout')
@section('title','Reset Password')
@section('link','Reset Password')
@section('content')
<div class="container-fluid d-flex justify-content-center">
        <div class="card card-info" style="width: 50rem">
            <div class="card-body">
                <form>
                    <div class="form-group row">
                      <label for="username" class="col-sm-2 col-form-label">Username</label>
                      <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="username" value="hadinurhidayat">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="oldPassword" class="col-sm-2 col-form-label">Old Password</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control-plaintext" id="oldPassword" value="lla01">
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="newPassword" class="col-sm-2 col-form-label">New Password</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="newPassword" placeholder="Password">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-12">
                          <a href="" class="btn btn-primary">Reset Password</a>
                      </div>
                    </div>
                </form>
            </div>
        </div>
</div>
@endsection