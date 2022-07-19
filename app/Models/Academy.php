<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academy extends Model
{

    protected $table = 'academys';

    use HasFactory;

    protected $fillable = [
      
        'school',
        'schooltitlel',
        'endyear',
        'years',
        
    ];

    public function user() {

        //lo vinculamos con el modelo User

        return $this->belongsTo(User::class);

    }
}
