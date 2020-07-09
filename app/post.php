<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //change table name
    //protected $table = 'posts';
    //change primary key
   // public $primaryKey ='id';

    //if you don't want timstamps
   // public $timestamps =false;

   public function user(){
       return $this->belongsTo('App\User');
   }
}
