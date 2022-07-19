<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class companies extends Model
{
    protected $table = 'companies';

    use HasFactory;

    protected $fillable = [
      
        'user_id',
        'jobtitle',
        'jobcategory',
        'companyname',
        'companyemail',
        'companyweb',
        'companylocation',
        'jobtype',            
        'jobtags',            
        'jobsalary',
        'jobexperience',
        'jobdescription',
        
    ];

    
    public function user() {

        //lo vinculamos con el modelo User

        return $this->belongsTo(User::class);

    }


}
