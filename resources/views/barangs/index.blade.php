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
        <td>
            <form action="/barangs/updateqty/{{$barang->id}}" method="post">
            @csrf
            @method('PUT')
            <div class="input-group mb-3">
                {{-- <input type="number" class="form-control" style="display: none;" value="{{$barang->baskets->hargabarang}}"> --}}
                <select class="form-control" name="baskets_id" style="display: none;">
                    <option value="{{$barang->baskets->id}}">{{$barang->baskets->hargabarang}}</option>
                </select>
                <input type="number" class="form-control" name="stok" value="{{$barang->stok}}" max="{{$barang->baskets->stok}}" min="1">
                <div class="input-group-append">
                    <button class="btn btn-outline-success" type="submit" id="button-addon2">Update</button>
                </div>
            </div>
            </form>
        </td>
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
<div class="alert alert-primary text-center">Total Uang yang terkumpul di keranjang : {{number_format(Auth::user()->barangs->sum("totalharga"))}}</div>
@php
$barang = Auth::user()->barangs->count('id');
if ($barang < 1) {
}
else {
    echo "<a href='/pembayaran' class='btn btn-outline-success my-3'>Pembayaran</a>";
}
@endphp