<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = "pembayaran";

    protected $fillable = ["hargasemua","bayar","kembalian","user_id"];

    public function users(){
        return $this->belongsTo('App\User');
    }
}
