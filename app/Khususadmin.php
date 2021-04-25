<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Khususadmin extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function baskets(){
        return $this->belongsTo('App\Basket');
        }
}
