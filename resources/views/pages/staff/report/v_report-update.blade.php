@extends('layout.staff.v_layout')
@section('title','Daily Report')
@section('link','Report')
@section('content')
<div class="container d-flex justify-content-center">
    <div class="col-5">
        <div class="card bg-gradient-warning text-sm">
            <div class="card-body">
                <form action="{{url('/report-update-new',$data->id)}}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="user_id" name="user_id" value="{{Auth::user()->id}}" hidden>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="code" name="code" value="{{$data->code}}" hidden>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="created_at" name="created_at" value="{{$data->created_at}}" hidden>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="Covernote AJK" class="form-control-label text-sm">Covernote AJK</label>
                            <input type="text" class="form-control" id="covernote" name="covernote" value="{{$data->covernote}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Refund Premi" class="form-control-label text-sm">Refund Premi (Surrender)</label>
                            <input type="text" name="refund" id="refund" class="form-control" value="{{$data->refund}}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="label" class="form-control-label text-sm">Setting dan Input Polis</label>
                        </div>
                    </div>
                    <div class="form-row" style="margin-top: -20px" >
                        <div class="form-group col-md-6">
                            <label for="5000" class="form-control-label font-weight-normal"> Kurang dari 5000 Polis</label>
                            <input type="text" name="polis_a" id="polis_a" class="form-control" value="{{$data->polis_a}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="50001" class="form-control-label font-weight-normal">Lebih dari 5000 polis</label>
                            <input type="text" name="polis_b" id="polis_b" class="form-control" value="{{$data->polis_b}}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="label" class="form-control-label text-sm">Sertifikat</label>
                        </div>
                        <div class="form-group col-md 6">
                            <label for="label" class="form-control-label text-sm">Enrollment GTL</label>
                        </div>
                    </div>
                    <div class="form-row" style="margin-top: -20px" >
                        <div class="form-group col-md-6">
                            <label for="input Data" class="form-control-label font-weight-normal"> Input Data</label>
                            <input type="text" name="sertifikat" id="sertifikat" class="form-control" value="{{$data->sertifikat}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Input Data" class="form-control-label font-weight-normal">Input Data</label>
                            <input type="text" name="enrollment" id="enrollment" class="form-control" value="{{$data->enrollment}}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="label" class="form-control-label text-sm">Claim Meninggal</label>
                        </div>
                    </div>
                    <div class="form-row" style="margin-top: -20px">
                        <div class="form-group col-md-6">
                            <label for="verifikasi" class="form-control-label font-weight-normal">Verifikasi Dokumen</label>
                            <input type="text" name="verifikasi" id="verifikasi" class="form-control" value="{{$data->verifikasi}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="analisa" class="form-control-label font-weight-normal">Analisa dan Evaluasi Claim</label>
                            <input type="text" name="analisa" id="analisa" class="form-control" value="{{$data->analisa}}">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary" type="submit">Submit</button>
                    <a href="{{url('/dashboard')}}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection