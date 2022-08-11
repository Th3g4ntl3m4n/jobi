<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class offers extends Model
{
    protected $table = 'offers';

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
        'applybefore',
        'requirements',
        
    ];

    
    public function user() {

        //lo vinculamos con el modelo User

        return $this->belongsTo(User::class);

    }


}
