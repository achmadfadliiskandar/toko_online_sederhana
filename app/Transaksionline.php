<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksionline extends Model
{
    protected $fillable = ["kartu","bukti","alamatpengiriman","pengiriman","totalbelanja","barang","user_id"];

    public function user(){
    	return $this->belongsTo('App\User');
    }
    public function baskets(){
    	return $this->belongsTo('App\Basket','basket_id');
    }
}
