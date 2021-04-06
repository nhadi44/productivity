<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProcessModel extends Model
{
    protected $table = "process";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'code', 'job_code', 'total_process', 'process_time', 'total_time_process', 'main_id', 'created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo(EmployeeModel::class);
    }

    public function main()
    {
        return $this->belongsTo(MainJobModel::class);
    }
}
