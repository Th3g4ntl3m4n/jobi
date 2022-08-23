<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'body',
    ];

    // Realizamos la relacion en el modelo

    //Creamos user, porque una publicacion pertenece a un 
    //unico usuario, se escribe en singular de manera intensional
    public function user() {

        //lo vinculamos con el modelo User

        return $this->belongsTo(User::class);

    }
}
