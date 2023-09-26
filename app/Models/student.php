<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
     protected $primaryKey = 'id';

    protected $table = 'students';
  
    protected $fillable = [
         'rollnumber' ,
            'fullname',
            'fathersname',
            'mothersname',
            'adhaar',
            'qualification',
            'phonenumber',
            'course',
            'addmissionfrom',
            'addmissionupto',
            'address',
        'created_at',
        'updated_at',

    ];
}
