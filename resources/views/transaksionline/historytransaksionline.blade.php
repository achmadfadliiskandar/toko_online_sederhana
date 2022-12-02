@extends('layout.main')

@section('title','Data Transaksi Online')

@section('container')
        <h1 class="text-center mt-5 pt-5">History Transaksi Online : {{$transaksionlines->id}}</h1>
        <div class="container">
        @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
        {{-- <p class="text-center">
            data yang bertujuan untuk mengetahui user sudah pernah mengirim pembayaran melalui transaksi 
        </p> --}}
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Barang</th>
                <th scope="col">Harga Barang</th>
                <th scope="col">Jumlah Barang</th>
                <th scope="col">Total Belanja Barang</th>
                <th scope="col">Nama</th>
                <th scope="col">Total Harga Semua </th>
            </tr>
            </thead>
            <tbody>
                @forelse ($transaksionlines->transaksionlinesdetail as $saksi)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$saksi->baskets->namabarang}}</td>
                    <td>{{number_format($saksi->baskets->hargabarang)}}</td>
                    <td>{{$saksi->stok}}</td>
                    <td>{{number_format($saksi->baskets->hargabarang * $saksi->stok)}}</td>
                    <td>{{$saksi->user->name}}</td> 
                    <td>{{number_format($saksi->totalharga)}}</td>
                    </tr>
                @empty
                <td colspan="9" class="text-center">Anda belum pernah Pembayaran Online</td>
                <tr>
                @endforelse
            </tbody>  
        </table>
        {{-- @if ($saksi->status == NULL)
        <div class="alert alert-warning mb-5">Anda Belum Pernah Belanja</div>
    @else
    @endif --}}
    </div>
@endsection