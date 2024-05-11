<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Foundation\Auth\User as Authenticatable;

class mother extends Authenticatable
{
    use HasFactory;
    protected $fillable = ['name','age','email','phone','address','image'];




    public function image(): MorphOne
    {
        return $this->morphOne(image::class, 'imageable');
    }
    public function appointments(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasmany(appointment::class);
    }
    public function records(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasmany(record::class);
    }
    public function analysis_results(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasmany(Analysis_Result::class);
    }

}
