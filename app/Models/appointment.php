<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function mother(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(mother::class,'mother_id');
    }
    public function doctor(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(doctor::class);
    }
}
