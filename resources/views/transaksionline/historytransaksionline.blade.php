@extends('layout.main')

@section('title','Data Transaksi Online')

@section('container')
        <h1 class="text-center mt-5 pt-5">History Transaksi Online</h1>
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
                <th scope="col">Barang yang di belanjakan</th>
                <th scope="col">Total Belanja</th>
                <th scope="col">Nama</th>
            </tr>
            </thead>
            <tbody>
                @forelse ($transaksionlines as $saksi)
                <tr>
                    @if ($saksi->status > 1)
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$saksi->barangs_id}}</td>
                    <td>{{$saksi->totalbelanja}}</td>
                    <td>{{$saksi->user->name}}</td> 
                    </tr>
                    @endif
                @empty
                <td colspan="9" class="text-center">Anda belum pernah Pembayaran Online</td>
                <tr>
                @endforelse
            </tbody>  
        </table>
        @if ($saksi == NULL)
        <div class="alert alert-warning">Anda Belum Pernah Belanja</div>
    @else
    <div class="alert alert-secondary">total belanja tertinggi anda : {{Auth::user()->transaksionlines->max("totalbelanja")}}</div>
    <div class="alert alert-danger">total belanja terendah anda : {{Auth::user()->transaksionlines->min("totalbelanja")}}</div>
    @endif
    </div>
@endsection