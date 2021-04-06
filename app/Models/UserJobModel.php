<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserJobModel extends Model
{
    protected $table = "user_job";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'code', 'job_name', 'total_process', 'total_time_process', 'job_desc', 'created_at', 'updated_at', 'user_id', 'main_id'];

    public function user()
    {
        return $this->belongsTo(EmployeeModel::class);
    }

    public function main()
    {
        return $this->belongsTo(MainJobModel::class);
    }

    public function report()
    {
        return $this->hasMany(ReportModel::class);
    }
}
