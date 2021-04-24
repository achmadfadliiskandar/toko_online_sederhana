@extends('layout.main')

@section('title','Basket')

@section('container')

<div class="container">
<h1 class="mt-5 text-center pt-5">Tampilan Basket</h1>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
@section('grid')
@foreach($baskets as $basket)
  <div class="col-md-4 mt-4">
    <div class="card">
      <img src="/images/{{$basket->gambar}}" class="card-img-top" alt="gambar">
      <div class="card-body">
        <h5 class="card-title text-uppercase">{{$basket->namabarang}}</h5>
        <p class="card-text"> Harga : {{ number_format($basket->hargabarang) }}</p>
        <p class="card-text">Kode Barang : {{$basket->id}}</p>
        {{-- <p class="card-text">Jumlah Beli : {{$basket->jumlah_beli}}</p> --}}
        {{-- <p class="card-text">Total Harga Rp . {{ number_format($basket->totalharga) }}</p> --}}
        <p class="card-text">Stok : {{$basket->stok}}</p>
        <a href="/baskets/{{ $basket->id }}" class="btn btn-info d-block">Detail Barang</a>
      </div>
    </div>
  </div>
@endforeach
@forelse ($baskets as $basket)
{{-- <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Yakin Lanjut pembayaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>sebelum melanjut ke pembayaran ada 2 pilihan yaitu ?
          pilihan 1.lanjut ke pembayaran
          pilihan 2.masih mau belanja lagi
        </p>
      </div>
      <div class="modal-footer">
        <a href='/pembayaran'class='btn btn-outline-success my-3 mt-3'>pembayaran</a>
        <a href="/baskets" class="btn btn-outline-secondary">masih mau belanja lagi</a>
      </div>
    </div>
  </div>
</div>  --}}
@empty
  <div class="alert alert-danger w-100">tidak ada barang dikeranjang</div>
@endforelse
</div>
@endsection
@endsection