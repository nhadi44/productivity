<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportModel extends Model
{
    use HasFactory;
    protected $table = "report";
    protected $primaryKey = "id";
    protected $fillable = [
        'code',
        'job_code',
        'job_desc',
        'total_process',
        'process_time',
        'ujob_id',
        'main_id',
        'created_at',
        'updated_at'
    ];

    public function ujob()
    {
        return $this->belongsTo(UserJobModel::class);
    }

    public function main()
    {
        return $this->belongsTo(MainJobModel::class);
    }
}
