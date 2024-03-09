<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class doctor extends Model
{
    use HasFactory;
    protected $guarded=[];
    //protected $fillable =['name','section_id','age','phone','email','gender','details','address','experience','password'];

    /**
     * Get the doctor's image.
     */
    public function image(): MorphOne
    {
        return $this->morphOne(image::class, 'imageable');
    }


    public function section()
    {
        return $this->belongsTo(section::class);
    }

}
