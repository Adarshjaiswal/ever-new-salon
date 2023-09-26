<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;
       protected $primaryKey = 'id';

    protected $table = 'contacts';
  
    protected $fillable = [
         'name' ,
            'phone',
            'email',
            'message',
        'created_at',
        'updated_at',

    ];
}
