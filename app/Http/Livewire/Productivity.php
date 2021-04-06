<?php

namespace App\Http\Livewire;

use App\Models\ReportModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Productivity extends Component
{
    public function render()
    {
        $report = ReportModel::all();
        // $total = ReportModel::where('created_at')->sum('total_process');
        return view('livewire.productivity', compact('report'));
    }
}
