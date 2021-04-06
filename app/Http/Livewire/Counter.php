<?php

namespace App\Http\Livewire;

use App\Models\MainJobModel;
use App\Models\ProcessModel;
use App\Models\ReportModel;
use App\Models\User;
use App\Models\UserJobModel;
use Livewire\Component;

class Counter extends Component
{
    public $ujob;
    public $codes = [];
    public $process = [];
    public $mjob = [];
    public $jobname;

    public function render()
    {
        if (!empty($this->ujob)) {
            $this->codes = UserJobModel::where('id', $this->ujob)->get();
        }
        if (!empty($this->ujob)) {
            $this->process = ProcessModel::where('id', $this->ujob)->get();
        }
        if (!empty($this->ujob)) {
            $this->mjob = MainJobModel::where('id', $this->ujob)->get();
        }
        $report = ReportModel::all();
        $main = MainJobModel::all();
        return view('livewire.counter', compact('report', 'main'));
    }
}
