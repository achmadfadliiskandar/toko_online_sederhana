<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Basket extends Model
{
use SoftDeletes;
    
    protected $fillable = ['namabarang','hargabarang','stok','keterangan','gambar','user_id'];

    public function user(){
    return $this->belongsTo('App\User');
    }
    public function barangs(){
        return $this->belongsTo('App\Barang');
        }
    // public function cod(){
    //     return $this->hashOne('App\Cod');
    // }
    // public function transaksionline(){
    //     return $this->hashOne('App\Transaksionline');
    // }
}
