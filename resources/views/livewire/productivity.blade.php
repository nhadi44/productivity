<div class="container">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Productivity Report</h5>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Date</th>
                        <th>Total Time Process</th>
                        <th>Productivity</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($report as $item)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$item->created_at->format('d/m/Y')}}</td>
                        {{-- <td>{{$item-q>total_process * $item->process_time}}</td> --}}
                        {{-- <td>{{$total}}</td> --}}
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>