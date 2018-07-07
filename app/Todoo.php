<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todoo extends Model
{
   protected $table = 'todoos';
   protected $fillable = [
    	
    	'text'
    ]
    ;
   // protected $guareded=[];
   // protected $guarded = [];
    
}
