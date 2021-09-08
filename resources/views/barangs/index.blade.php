@extends('layout.main')

@section('title','Cart')

@section('container')
<div class="container">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<h1 class="mt-5 pt-5 text-center">Cart</h1>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Jumlah Barang Di Keranjang : 
            @foreach ($barangs as $barang)
            @if ($barang->status_pembelian == 'keranjang')
            {{$barang->status_pembelian == 'keranjang'}}
            @endif
            @endforeach
            <li class="breadcrumb-item">Jumlah Barang yg siap di beli : 
            @foreach ($barangs as $barang)
            @if ($barang->status_pembelian == 'beli')
            {{$barang->status_pembelian == 'beli'}}
            @endif
            @endforeach
        </li>
    </ol>
</nav>
<table class="table table-hover table table-bordered">
    <thead>
    <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Barang</th>
        <th scope="col">Harga Barang</th>
        <th scope="col">Jumlah Beli</th>
        <th scope="col">Total Harga</th>
        <th scope="col">Hapus Keranjang</th>
    </tr>
    </thead>
    <tbody>
        @forelse ($barangs as $barang)   
    <tr>
        @if ($barang->status_pembelian == 'keranjang')
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$barang->baskets->namabarang}}</td>
        <td>{{number_format($barang->baskets->hargabarang)}}</td>
        <td>{{$barang->stok}}</td>
        <td>{{number_format($barang->totalharga)}}</td>
        <td>
    <form action="/barangs/{{$barang->id}}" method="post" class="my-2" onsubmit="return confirm('yakin ingin di hapus')">
    @method('delete')
    @csrf
    <button type="submit" class="btn btn-block btn btn-danger">Hapus</button>
    </form>
    </td>
        @endif
    </tr>
@empty
<div class="alert alert-danger w-100">Keranjang Kosong</div>
@endforelse
</tbody>
</table>
<div class="accordion" id="accordionExample">
    <div class="card">
    <div class="card-header bg-primary" id="headingOne">
        <h2 class="mb-0">
        <button class="btn btn-primary btn-block text-center"  type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Total Uang yang terkumpul di keranjang : {{number_format(Auth::user()->barangs->sum("totalharga"))}}
        </button>
        </h2>
    </div>
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <h4> Status Pembelian : Beli</h4>
                    @foreach ($barangs as $barang)
                    @if ($barang->status_pembelian == 'beli')
                    <p>{{$barang->baskets->namabarang}} : {{number_format($barang->baskets->hargabarang)}} x {{$barang->stok}} = {{number_format($barang->totalharga)}}</p>
                    @endif
                    @endforeach
                </div>
                <div class="col-sm-6">
                    <h4> Status Pembelian : Keranjang</h4>
                    @foreach ($barangs as $barang)
                    @if ($barang->status_pembelian == 'keranjang')
                    <p>{{$barang->baskets->namabarang}} : {{number_format($barang->baskets->hargabarang)}} x {{$barang->stok}} = {{number_format($barang->totalharga)}}</p>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@php
$barang = Auth::user()->barangs->count('id');
if ($barang < 1) {
}
else {
    echo "<a href='/pembayaran' class='btn btn-outline-success my-3'>Pembayaran</a>";
}
@endphp