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
<a href="/baskets" class="btn btn-primary my-3">Tambah Cart</a>
@section('grid')
@forelse ($barangs as $barang)   
<div class="col-md-4">
<div class="card" style="width: 100%;">
    <div class="card-body">
        <h5 class="card-title text-uppercase">{{$barang->baskets->namabarang}}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{number_format($barang->baskets->hargabarang)}}</h6>
        <p class="card-text">{{$barang->stok}}</p>
        <p class="card-text">{{number_format($barang->totalharga)}}</p>
        <a href="/barangs/{{ $barang->id}}/edit" class="btn btn-success btn btn-block">Update</a>
        <form action="/barangs/{{$barang->id}}" method="post" class="my-2" onsubmit="return confirm('yakin ingin di hapus')">
        @method('delete')
        @csrf
        <button type="submit" class="btn btn-block btn btn-danger">Hapus</button>
        </form>
    </div>
    </div>
</div>
@empty
<div class="alert alert-danger w-100">Nggak Ada datanya</div>
@endforelse
@endsection