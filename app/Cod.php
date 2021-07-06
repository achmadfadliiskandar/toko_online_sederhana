<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cod extends Model
{
    protected $table = 'cod';

    protected $fillable = ["telpon","barangs_id","alamat","kode_unik","pengiriman","totalbelanja","user_id"];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function barangs(){
        return $this->hashMany('App\Barang');
    }
    public function baskets(){
        return $this->hashMany('App\Basket');
    }
    // public function konfirmasi(){
    //     return $this->hasOne('App\Konfirmasi');
    // }
}
