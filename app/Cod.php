<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cod extends Model
{
    protected $table = 'cod';

    protected $fillable = ["telpon","barangs_id","alamat","pengiriman","totalbelanja","barangs_id","user_id"];

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
}
