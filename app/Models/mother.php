<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Foundation\Auth\User as Authenticatable;

class mother extends Authenticatable
{
    use HasFactory;
    protected $guarded=[];




    public function image(): MorphOne
    {
        return $this->morphOne(image::class, 'imageable');
    }
}
