@extends('partial.master')

@section('title','Admin Baskets')

@section('container')

<div class="container">
<h1 class="mt-5 text-center pt-5">Admin Baskets</h1>
<a href="/baskets/create" class="btn btn-primary my-3">Tambah Basket</a>
{{-- <a href="/trash" class="btn btn-white">Tong sampah</a>  --}}
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<table class="table table-bordered">
<thead>
    <tr>
    <th scope="col">No</th>
    <th scope="col">Nama Barang</th>
    <th style="col">Gambar</th>
    <th scope="col">Harga Barang</th>
    <th scope="col">Stok</th>
    <th scope="col">Aksi</th>
    </tr>
</thead>
<tbody>
@foreach($baskets as $basket)
<tr>
<td>{{$loop->iteration}} </td>
<td>{{$basket->namabarang}}</td>
<td><img src="/gambar/{{$basket->gambar}}" class="card-img-top" style="width: 100px;" alt="gambar"></td>
<td>{{ number_format($basket->hargabarang) }}</td>
<td>{{$basket->stok}}</td>
<td>
    <a href="/baskets/{{ $basket->id}}/edit" class="btn btn-success">Update</a> 
    {{-- {{-- <a href="/baskets/{{$basket->id}}" onclick="return confirm('yakin mau di hapus ?? ')" class="btn btn-danger">Hapus Keranjang</a>  --}}
    <form action="/baskets/{{$basket->id}}" method="post" class="d-inline" onsubmit="return confirm('yakin ingin di hapus')">
        @method('delete')
        @csrf
        <button type="submit" class="btn btn-danger d-block">Hapus</button>
        </form>
    <a href="/baskets/{{ $basket->id }}" class="btn btn-info">show</a>
</td>
</tr>
@endforeach
</tbody>
</table>
@endsection