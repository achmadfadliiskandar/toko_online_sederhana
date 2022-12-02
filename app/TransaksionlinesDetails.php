<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransaksionlinesDetails extends Model
{
    protected $table = 'transaksionlinesdetails';
    protected $fillable = ['transaksionlines_id','barangs_id','baskets_id','stok','kodeunik','hargabeli','totalharga','user_id'];

    public function baskets(){
        return $this->belongsTo('App\Basket');
    }
    public function transaksionline(){
    	return $this->belongsTo('App\Transaksionline');
    }
    public function user(){
    	return $this->belongsTo('App\User');
    }
}
