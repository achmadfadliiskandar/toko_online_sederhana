@extends('layout.main')

@section('title','Detail Basket')

@section('container')

<h1 class="mt-5 text-center pt-5">Detail basket</h1>
<div class="container">


<div class="card mt-5" style="width: 100%">
  <div class="card-body mt-3">
    <p>Nama Barang : {{$basket->namabarang}}</p>
    <p>Harga Barang Rp : {{ number_format($basket->hargabarang) }} </p>
    <p>stok : {{$basket->stok}}</p>
    <p>keterangan : {{$basket->keterangan}}</p>
  </div>
</div>
<a href="/baskets" class="btn btn-warning my-3">Keluar/back</a>
<a href="/barangs" class="btn btn-primary my-3">Belanja</a>
</div>
@endsection