<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    protected $table = 'cv';
    
    use HasFactory;

    protected $fillable = [
      
        'phone',
        'ciudad',
        'DniNumber',
        
        
    ];

    public function user() {

        //lo vinculamos con el modelo User

        return $this->belongsTo(User::class);

    }
}
