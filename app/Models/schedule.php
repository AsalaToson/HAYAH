<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    use HasFactory;
    protected $guarded=[];



    public function doctor()
    {
        return $this->belongsTo(doctor::class,'doctor_id');
    }

    public function section()
    {
        return $this->belongsTo(section::class,'section_id');
    }

//    public function mother()
//    {
//        return $this->belongsTo(mother::class,'mother_id');
//    }


    public function mother()
    {
        return $this->belongsTo(User::class,'mother_id');
    }
}
