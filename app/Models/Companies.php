<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{

    protected $table = 'companies';

    use HasFactory;

    protected $fillable = [
              
        'phone',
        'city',
        'country',
        'web',
        'address',
        'description',
        'NumeroEmpleados',
        'Category',
        'Experiencia',
        'nit',
        'NombreRepresentante',
        'CargoRepresentante',
        'EmailRepresentante',
        'MovilRepresentante',
        'FijoRepresentante',


    ];

    Public function user() {

        //lo vinculamos con el modelo User

        return $this->belongsTo(User::class);

    }
}
