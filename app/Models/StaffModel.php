<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffModel extends Model
{
    protected $table = "report";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'code',
        'job_name',
        'job_desc',
        'department',
        'total_process',
        'productivity',
        'depart_id',
        'user_id',
        'created_at',
        'updated_at'
    ];

    public function depart()
    {
        return $this->belongsTo(AdminModel::class);
    }

    public function user()
    {
        return $this->belongsTo(EmployeeModel::class);
    }
}
