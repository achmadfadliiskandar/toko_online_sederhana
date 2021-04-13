<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cod extends Model
{
    protected $table = 'cod';

    protected $fillable = ["telpon","alamat","pengiriman","totalbelanja","barang","user_id"];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function barangs(){
        return $this->belongsTo('App\Basket','barangs_id');
    }
}
