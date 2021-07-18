<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksionline extends Model
{
    protected $fillable = ["kartu","bukti","alamatpengiriman","pengiriman","kode_unik","totalbelanja","barangs_id","user_id","status"];

    public function user(){
    	return $this->belongsTo('App\User');
    }
    public function baskets(){
    	return $this->belongsTo('App\Basket','basket_id');
    }
    public function barangs(){
    	return $this->belongsTo('App\Barang');
    }
    // public function konfirmasi(){
    //     return $this->hasOne('App\Konfirmasi');
    // }
}
