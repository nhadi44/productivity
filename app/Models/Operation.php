<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    use HasFactory;

    protected $table = 'operation';
    protected $primaryKey = 'id';
    protected $fillable = [
        'code',
        'user_id',
        'covernote',
        'refund',
        'polis_a',
        'polis_b',
        'sertifikat',
        'enrollment',
        'vertifikasi',
        'analisa',
        'total',
        'productivity'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
