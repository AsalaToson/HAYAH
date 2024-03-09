<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class image extends Model
{
    use HasFactory;

    /**
     * Get the parent imageable model (doctor or patient).
     */
    public function imageable(): MorphTo
    {
        return $this->morphTo();
    }
}
