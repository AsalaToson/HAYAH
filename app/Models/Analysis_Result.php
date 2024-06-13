<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Analysis_Result extends Model
{
    use HasFactory;

    protected $guarded=[];

    protected $table = 'analysis_results';
    protected $primaryKey = 'id';
    //protected $fillable = ['mother_id','doctor_id','labDoctor_id','analysis_Name','photo'];


    public function labDoctor(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(lab_doctor::class, 'labDoctor_id');
    }

    public function doctor()
    {
        return $this->belongsTo(doctor::class, 'doctor_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
