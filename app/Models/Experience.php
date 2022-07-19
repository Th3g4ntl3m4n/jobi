<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $table = 'experience';
    use HasFactory;

    protected $fillable = [
      
        'company',
        'position',
        'yearstartwork',
        'yearfinishtwork',
        'labsyears',
        
    ];

    public function user() {

        //lo vinculamos con el modelo User

        return $this->belongsTo(User::class);

    }
}
