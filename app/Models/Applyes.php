<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applyes extends Model
{
    use HasFactory;

    protected $fillable = [
      
        'state',
        'commets',
        'favorite',       
        
    ];


    public function user() 
{
    return $this->hasMany(User::class);
    
}

public function offers() 
    {
        return $this->hasMany(offers::class);
    }

}


