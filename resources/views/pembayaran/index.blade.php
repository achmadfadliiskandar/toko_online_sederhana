@extends('layout.main')

@section('title','Data Transaksi/Pembayaran')

@section('container')
<h1 class="text-center mt-4 pt-5">Data Transaksi/Pembayaran</h1>
<p class="text-center">Silahkan melakukan pembayaran di sini</p>
<div class="container">
  
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="alert alert-success">selamat datang {{ Auth::user()->name }}</div>
            <a href="/baskets" class="btn btn-outline-dark my-3">Back</a>
            <div class="card">
                <div class="card-header text-center">Silahkan Pilih Pembayaran Anda</div>
                <div class="card-body">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                          <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                              <button class="btn btn-link text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  Pembayaran Secara Online Transfer
                              </button>
                            </h2>
                          </div>
                      
                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                            <a href="/transaksionline/create" class="btn btn-outline-success btn-lg btn-block">Pembayaran Online/Transfer</a>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                              <button class="btn btn-link text-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                  Pembayaran Secara Cod
                              </button>
                            </h2>
                          </div>
                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                              <a href="/cod/create" class="btn btn-outline-warning btn-lg btn-block">Cod (bayar Dari rumah)</a>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection