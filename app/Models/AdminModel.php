<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdminModel extends Model
{
    protected $table = "depart";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'code', 'nama', 'created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo(EmployeeModel::class);
    }

    public function getData()
    {
        return DB::table('depart')->get();
    }



    // public function main(){
    //     return $this->belongsTo(MainJobModel::class);
    // }

    // public function addDataDepart(){
    //     return DB::table('depart')->insert($data);
    // }
}
