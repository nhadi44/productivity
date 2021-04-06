<div class="container-fluid d-flex justify-content-center">
    <div class="col-12">
        <div class="card text-sm">
            <div class="card-header">
                Daly Report
            </div>
            <div class="card-body">
                <a href="{{url('/add-report')}}" class="btn btn-primary"><i class="fas fa-plus mr-2"></i>Add New Report</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Job Name</th>
                            <th>Job Description</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($report as $item)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$item->code}}</td>
                            <td>{{$item->job_name}}</td>
                            <td>{{$item->job_desc}}</td>
                            <td>{{$item->created_at->format('d/m/Y')}}</td>
                            <td>{{$item->updated_at->format('d/m/Y')}}</td>
                            <td>
                                {{-- <button class="btn btn-success" data-toggle="tooltip" data-placement="bottom" title="Edit" wire:click.prevent="edit({{$item->id}})"><i class="fas fa-edit"></i></button> --}}
                                <a href="{{url('/report-edit',$item->id)}}" class="btn btn-success" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fas fa-edit"></i></a>
                                <a href="{{url('/report-delete',$item->id)}}" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @include('sweetalert::alert')
            </div>
        </div>
    </div>
</div>