<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konfirmasi extends Model
{
    protected $table = 'konfirmasi';
    protected $fillable = ["status","pengantaran","cod_id","transaksionlines_id","user_id"];

    public function user(){
        return $this->belongsTo('App\User');
    }
    public function cod(){
        return $this->belongsTo('App\Cod');
    }
    public function transaksionlines(){
        return $this->belongsTo('App\TransaksiOnlines');
    }
}
