<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;




    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    protected $fillable = [
        'name', 'age', 'address', 'email', 'phone', 'image'
    ];



    public function image(): \Illuminate\Database\Eloquent\Relations\MorphOne
    {
        return $this->morphOne(image::class, 'imageable');
    }
    public function schedules(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasmany(schedule::class);
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
