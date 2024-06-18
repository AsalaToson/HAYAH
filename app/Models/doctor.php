<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Foundation\Auth\User as Authenticatable;

class doctor extends Authenticatable
{
    use HasFactory;

    protected $guarded = [];
    //protected $fillable =['name','section_id','age','phone','email','gender','details','address','experience','password'];

    /**
     * Get the doctor's image.
     */
    public function image(): MorphOne
    {
        return $this->morphOne(image::class, 'imageable');
    }


    public function section(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(section::class);
    }


//    public function doctorappointments(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
//    {
//        return $this->belongsToMany(appointment::class, 'appointment_doctor');
//    }


    public function users(): \Illuminate\Database\Eloquent\Relations\HasManyThrough
    {
        return $this->hasManyThrough(User::class, schedule::class, 'doctor_id', 'user_id');
    }
}
//

