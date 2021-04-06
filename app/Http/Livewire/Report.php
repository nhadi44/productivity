<?php

namespace App\Http\Livewire;

use App\Models\ReportModel;
use Livewire\Component;

class Report extends Component
{
    public $updateStateId = 0;

    public function render()
    {
        $report = ReportModel::all();
        return view('livewire.report', compact('report'));
    }

    public function edit($id)
    {
        $report = ReportModel::where('id', $id)->first();
        $this->id = $report->id;
        $this->code = $report->code;
        $this->job_code = $report->job_code;
        $this->job_name = $report->job_name;
        $this->job_desc = $report->job_desc;
        $this->total_proces = $report->total_process;
        $this->process_time = $report->process_time;
    }
}
