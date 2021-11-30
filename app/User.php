<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','address','role','notelpon','gambar','email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function Baskets(){ 
        return $this->hasMany('App\Basket'); 
    }
    public function pembayaran()
    {
        return $this->hasOne('App\Pembayaran');
    }

    public function transaksionlines()
    {
        return $this->hasMany('App\Transaksionline');
    }
    public function cod()
    {
        return $this->hasMany('App\Cod');
    }
    public function konfirmasi(){
        return $this->hashOne('App\Konfirmasi');
    }
    public function barangs(){
        return $this->hasMany('App\Barang');
    }
    public function khususadmin(){
        return $this->hasMany('App\Khususadmin');
    }
}
