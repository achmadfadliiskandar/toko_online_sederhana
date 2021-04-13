@extends('layout.main')

@section('title','History Cash On Delivery')
    
@section('container')
<div class="container">
    <h1 class="text-center mt-5 pt-5">History Cash On Delivery (COD)</h1>
    <p class="text-center">Belanja Online Bayar Dirumah</p>
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
    <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">NO</th>
            <th scope="col">No Telpon</th>
            <th scope="col">Alamat Pengantaran</th>
            <th scope="col">Waktu</th>
            <th scope="col">Pengiriman</th>
            {{-- <th scope="col">Barang</th> --}}
            {{-- <th scope="col">Total Belanja Anda</th> --}}
            <th scope="col">Nama Pembeli</th>
            <th scope="col">Total Belanja</th>
          </tr>
          @foreach ($cod as $d)
        </thead>
        <tbody>
          <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$d->telpon}}</td>
            <td>{{$d->alamat}}</td>
            <td>{{$d->created_at}}</td>
            <td>{{$d->pengiriman}}</td>
            {{-- <td>{{$d->barang}}</td> --}}
            {{-- <td>{{$d->baskets->namabarang}}</td> --}}
            {{-- <td>{{ number_format($d->basket = Auth::user()->baskets->sum('totalharga')) }}</td> --}}
            <td>{{$d->user->name}}</td>
            <td>{{$d->totalbelanja}}</td>
          </tr>
          @endforeach
          @forelse ($cod as $d)
        </tbody>
      @empty
      <td colspan="8" class="text-center text-danger">Anda Belum Pernah melakukan Pembayaran Cod</td>  
      @endforelse
</table>
@php
      /*for cod*/
      $cod = Auth::user()->cod->count('id');
      if ($cod < 1) {
        echo "<div class='alert alert-danger' role='alert'>
          Silahkan bayar cod terlebih dahulu
              </div>";
      }
      else{
        echo "<a href='/checkout' class='btn btn-outline-success my-3 w-100'>Checkout</a>";
      }
@endphp
{{-- <a href="/cod/create" class="btn btn-info d-block">Bayar dari rumah/cod sekarang</a> --}}
</div>
@endsection