@extends('layout.staff.v_layout')
@section('title','Daily Report')
@section('link','Report')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-4">
            <div class="card bg-gradient-warning text-sm">
                <div class="card-header">
                    <h5 class="card-title">Add New Report</h5>
                </div>
                <div class="card-body">
                    <form action="{{url('/report-new-add')}}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="user_id" name="user_id" value="{{Auth::user()->id}}" hidden>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="Covernote AJK" class="form-control-label text-sm">Covernote AJK</label>
                                <input type="text" class="form-control" id="covernote" name="covernote">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Refund Premi" class="form-control-label text-sm">Refund Premi (Surrender)</label>
                                <input type="text" name="refund" id="refund" class="form-control">
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
                                <input type="text" name="polis_a" id="polis_a" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="50001" class="form-control-label font-weight-normal">Lebih dari 5000 polis</label>
                                <input type="text" name="polis_b" id="polis_b" class="form-control">
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
                                <input type="text" name="sertifikat" id="sertifikat" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Input Data" class="form-control-label font-weight-normal">Input Data</label>
                                <input type="text" name="enrollment" id="enrollment" class="form-control">
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
                                <input type="text" name="verifikasi" id="verifikasi" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="analisa" class="form-control-label font-weight-normal">Analisa dan Evaluasi Claim</label>
                                <input type="text" name="analisa" id="analisa" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <a href="{{url('/dashboard')}}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
                @include('sweetalert::alert')
            </div>
        </div>
        <div class="col-8">
            <div class="card text-sm">
                <div class="card-body">
                    <h5 class="card-title">Productivity Report</h5>
                    <table class="table text-center">
                        <thead class="table-primary">
                            <tr>
                                <th>No</th>
                                <th>Code</th>
                                <th>Date</th>
                                <th>Name</th>
                                <th>Total Process</th>
                                <th>Productivity</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                            @php
                                $no = 1;
                            @endphp
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$item->code}}</td>
                                    <td>{{$item->created_at->format('d/m/Y')}}</td>
                                    <td>{{$item->user->name}}</td>
                                    <td>{{$item->total}}</td>
                                    <td>{{(int)$item->productivity}} %</td>
                                    <td>
                                        {{-- <a href="" class="btn btn-warning" data-toggle="tooltip modal" data-placement="bottom" title="Deatail" style="width: 40px"><i class="fas fa-info"></i></a> --}}
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" title="Detail" id="detail"><i class="fas fa-info" style="width: 18px"></i></button>
                                        <a href="{{url('/report-udpate',$item->id)}}" class="btn btn-success" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fas fa-edit"></i></a>
                                        <a href="{{url('/report-delete',$item->id)}}" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            @endforeach   
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- {{ $report->links() }} --}}
        </div>
    </div>
    <div class="modal fade text-sm" id="exampleModal" tabindex="2" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Report Detail</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered" style="text-align: center; font-size: 12px">
                    <tr>
                        <th rowspan="2" class="thead-light">No</th>
                        <th rowspan="2" class="thead-light">Nama</th>
                        <th class="thead-light" colspan="2">Claim</th>
                        <th class="thead-light" colspan="2">Setting dan Input Polis</th>
                        <th rowspan="2" class="thead-light">Covernote</th>
                        <th rowspan="2" class="thead-light">Refund Premi (Surrender)</th>
                        <th rowspan="2" class="thead-light">Sertifikat (Input Data)</th>
                        <th rowspan="2" class="thead-light">Enrollment GTL</th>
                    </tr>
                    <tr>
                        <th>Verifikasi Data</th>
                        <th>Verifikasi Data</th>
                        <th>Input Polis <= 5000</th>
                        <th>Input Polis => 5000</th>
                    </tr>
                    <tr>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($data as $item)
                            <td>{{$no++}}</td>
                            <td>{{$item->user->name}}</td>
                            <td>{{$item->verifikasi}}</td>
                            <td>{{$item->analisa}}</td>
                            <td>{{$item->polis_a}}</td>
                            <td>{{$item->polis_b}}</td>
                            <td>{{$item->covernote}}</td>
                            <td>{{$item->refund}}</td>
                            <td>{{$item->sertifikat}}</td>
                            <td>{{$item->enrollment}}</td>
                        @endforeach
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
</div>
</div>
@endsection