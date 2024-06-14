<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    use HasFactory;
    public $fillable = ['name', 'email', 'phone', 'message', 'doctor_id', 'section_id', 'type', 'appointment'];

    protected $guarded=[];
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function doctor(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(doctor::class);
    }

    public function section(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Section::class,'section_id');
    }

}
