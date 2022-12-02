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
    return $this->hashMany('App\Barang');
    }
    public function coddetail(){
    return $this->hasMany('App\CodDetail');
    }
    public function transaksionlinedetails(){
        return $this->hasMany('App\TransaksionlinesDetail');
    }
    public function khususadmins(){
        return $this->hashMany('App\Khususadmin');
    }
    
}
