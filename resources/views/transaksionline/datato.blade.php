@extends('partial.master')

@section('title','Data Transaksi Online')

@section('container')
<h1 class="text-center mt-5 pt-4">Data Transaksi Online</h1>
<div class="container">
@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif
        <p class="text-center">
            data yang bertujuan untuk mengetahui user sudah pernah mengirim pembayaran melalui transaksi 
        </p>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kartu</th>
                <th scope="col">Bukti</th>
                {{-- <th scope="col">Tanggal</th> --}}
                <th scope="col">Nama</th>
                <th scope="col">Barang yang di beli</th>
                <th scope="col">Pengiriman</th>
                <th scope="col">Alamat Pengiriman</th>
                <th scope="col">Total Belanja</th>
                <th scope="col">Kode Unik</th>
                <th scope="col">Waktu</th>
            </tr>
            </thead>
            <tbody>
                @forelse ($transaksionlines as $saksi)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$saksi->kartu}}</td>
                    <td><img src="/image/{{$saksi->bukti}}" alt="gambar"></td>
                    {{-- <td>{{$saksi->created_at}}</td>  --}}
                    <td>{{$saksi->user->name}}</td> 
                    <td>{{$saksi->pengiriman}}</td>
                    <td>{{$saksi->alamatpengiriman}}</td>   
                    <td>{{$saksi->barangs_id}}</td> 
                    <td>{{$saksi->totalbelanja}}</td>
                    <td>{{$saksi->kode_unik}}</td>
                    <td>{{$saksi->created_at}}</td>
                    {{-- <td>{{ number_format($saksi->basket = Auth::user()->baskets->sum('totalharga')) }}</td> --}}
                    {{-- <td>{{$saksi->barang}}</td> --}}
                </tr>
                @empty
                <td colspan="10" class="text-center">Anda belum pernah Pembayaran Online</td>
                <tr>
                @endforelse
            </tbody>
        </table>
    {{-- @php
    // $basket = Auth::user()->baskets->sum('totalharga');
    // echo "<br>";
    // echo "Total Semua  Rp . ";
    // echo number_format($basket);
    // // for transaksionline
    $saksi = Auth::user()->transaksionlines->count('id');
    if ($saksi < 1) {
        echo "<a href='/awal' class='btn btn-outline-warning my-3'>Checkout</a>";
    
    }
    else {
        echo "<div class='alert alert-danger'>silahkan melakukan transaksi terlebih dahulu</div>";
    }
    @endphp --}}
        {{-- <a href="/transaksionline/create" class="btn btn-outline-dark d-block">Bayar dengan transaksi online sekarang</a> --}}
    </div>
@endsection