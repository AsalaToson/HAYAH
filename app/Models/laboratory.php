<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laboratory extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function doctor()
    {
        return $this->belongsTo(doctor::class, 'doctor_id');
    }

    public function mother()
    {
        return $this->belongsTo(mother::class, 'mother_id');
    }
}
