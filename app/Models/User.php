<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasRoles;
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $guard_name = 'web';

    protected $fillable = [
        'name',
        'email',
        'password',
        'type',
    ];

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
    ];

    public function cvs() 
    {
        return $this->belongsTo(Cv::class);
    }

    public function companies() 
    {
        return $this->belongsTo(Companies::class);
    }

    public function academys() 
    {
        return $this->hasMany(Academy::class);
    }

    public function experiences() 
    {
        return $this->hasMany(Experience::class);
    }

    public function offers() 
    {
        return $this->hasMany(offers::class);
    }

    public function applyes() 
    {
        return $this->hasMany(Applyes::class);
    }

    
}
