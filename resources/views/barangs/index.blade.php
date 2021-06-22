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
    </tr>
@empty
<div class="alert alert-danger w-100">Keranjang Kosong</div>
@endforelse
</tbody>
</table>
<div class="alert alert-primary text-center" role="alert">
    Total Uang yang terkumpul di keranjang : {{number_format(Auth::user()->barangs->sum("totalharga"))}}
</div>
@php
$barang = Auth::user()->barangs->count('id');
if ($barang > 1) {
}
else {
    echo "<a href='/pembayaran' class='btn btn-outline-success'>Pembayaran</a>";
}
@endphp