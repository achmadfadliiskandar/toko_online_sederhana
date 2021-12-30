<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CodDetails extends Model
{
    protected $table = 'coddetails';
    protected $fillable = ['cod_id','status','barangs_id','baskets_id','stok','hargabeli','totalharga','user_id'];

    public function baskets(){
        return $this->belongsTo('App\Basket');
    }
    public function cod(){
        return $this->belongsTo('App\Cod');
    }
}
