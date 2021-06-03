<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Barang extends Model
{
    // use SoftDeletes;
    protected $fillable = ['baskets_id','stok','totalharga','user_id'];
    // protected $guarded = ['totalharga'];

    public function user(){
    return $this->belongsTo('App\User');
    }

    public function baskets(){
    return $this->belongsTo('App\Basket');
    }
    public function cod(){
    return $this->belongsTo('App\Cod');
    }
    public function transaksionline(){
        return $this->hashOne('App\Transaksionline');
    }
}
