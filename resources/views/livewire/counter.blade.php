<div class="container">
    <div class="card bg-lightblue">
        <div class="card-header">
            <h5 class="card-title">Form Productivity</h5>
        </div>
        <div class="card-body">
            <form action="/report-input" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="Main Code" class="form-control-label">Main Job Code</label>
                        <select name="main_id" id="main_id" class="form-control" wire:model="ujob">
                            <option value="0" selected="true">Select User Job Code</option>
                            @foreach ($main as $item)
                                <option value="{{$item->id}}">{{$item->code}}</option>
                            @endforeach
                        </select>
                    </div>
                    @if (count($codes) > 0)
                    <div class="form-group col-md-6">
                        <label for="Job Code" class="form-control-label">Job Code</label>
                        <select name="job_code" id="job_code" class="form-control">
                            @foreach ($codes as $item)
                            <option value="{{$item->code}}">{{$item->code}}</option>
                            @endforeach
                        </select>
                    </div>
                    @endif
                    @if (count($codes) > 0)
                        <div class="form-goup col-md-1">
                            <select name="ujob_id" id="ujob_id" class="form-control" hidden>
                                @foreach ($codes as $item)
                                    <option value="{{$item->id}}">{{$item->job_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    @endif
                </div>
                <div class="form-row">
                    @if (count($codes)>0)
                    <div class="form-group col-md-6">
                        <label for="Job Name" class="form-control-label">Job Name</label>
                        <select name="job_name" id="job_name" class="form-control">
                            @foreach ($codes as $item)
                                <option value="{{$item->job_name}}">{{$item->job_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    @endif
                    @if (count($mjob) > 0)
                        <div class="form-group col-md-6">
                            <label for="Time Process">Time Process</label>
                            <select name="process_time" id="process_time" class="form-control">
                                @foreach ($mjob as $item)
                                    <option value="{{$item->process_time}}">{{$item->process_time}} Minutes</option>
                                @endforeach
                            </select>
                        </div>  
                    @endif
                </div>
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="Total Process" class="form-control-label">Total Process</label>
                        <input type="text" name="total_process" id="total_process" placeholder="Input Total Taks" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="Job Description" class="form-control-label">Job Description</label>
                        <textarea name="job_desc" id="job_desc" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
        </form>
    </div>
</div>