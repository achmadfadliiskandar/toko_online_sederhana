<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konfirmasi extends Model
{
    protected $table = 'konfirmasi';
    protected $fillable = ["status","pengantaran","user_id"];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
