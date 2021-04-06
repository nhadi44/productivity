<?php

namespace App\Models;

use App\Http\Livewire\Report;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainJobModel extends Model
{
    protected $table = "main_job";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'code', 'job_name', 'job_desc', 'process_time', 'depart_id', 'created_at', 'updated_at'];

    public function depart()
    {
        return $this->belongsTo(AdminModel::class);
    }

    public function job()
    {
        return $this->belongsTo(UserJobModel::class);
    }

    public function process()
    {
        return $this->belongsTo(ProcessModel::class);
    }

    public function report()
    {
        return $this->hasMany(ReportModel::class);
    }
}
