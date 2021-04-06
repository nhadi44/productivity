<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeModel extends Model
{
    protected $table = "user";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'name', 'gender', 'start_contract', 'end_contract', 'title_job', 'depart_id', 'created_at', 'update_a'];

    public function depart()
    {
        return $this->belongsTo(AdminModel::class);
    }

    public function login()
    {
        return $this->belongsTo(LoginModel::class);
    }

    public function ujob()
    {
        return $this->belongsTo(UserJobModel::class);
    }

    public function main()
    {
        return $this->belongsTo(MainJobModel::class);
    }

    public function process()
    {
        return $this->belongsTo(ProcessModel::class);
    }
}
