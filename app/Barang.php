<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Barang extends Model
{
    use SoftDeletes;
    protected $fillable = ['id_baskets','namabarang','hargabarang','totalharga','stok','keteranganbrg','user_id'];

    public function user(){
    return $this->belongsTo('App\User');
    }

    public function baskets(){
    return $this->belongsTo('App\Basket');
    }
    public function cod(){
    return $this->hashOne('App\Cod');
    }
    public function transaksionline(){
        return $this->hashOne('App\Transaksionline');
    }
}
