<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginModel extends Model
{
    protected $table = "login";
    protected $primaryKey = "id";
    protected $fillable = ['id','username','password','level','user_id','created_at','updated_at'];

    public function user(){
        return $this->belongsTo(EmployeeModel::class);
    }
}
