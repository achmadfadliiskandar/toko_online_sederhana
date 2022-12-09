<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksionline extends Model
{

    protected $table = 'transaksionlines';
    protected $fillable = ["kartu","bukti","status","alamat_pengiriman","stok","kode_unik","totalbelanja","user_id"];

    public function user(){
    	return $this->belongsTo('App\User');
    }
    public function baskets(){
    	return $this->belongsTo('App\Basket');
    }
    public function barangs(){
    	return $this->belongsTo('App\Barang');
    }
    public function transaksionlinesdetail(){
    	return $this->hasMany('App\TransaksionlinesDetails','transaksionlines_id');
    }
    // public function konfirmasi(){
    //     return $this->hasOne('App\Konfirmasi');
    // }
}
