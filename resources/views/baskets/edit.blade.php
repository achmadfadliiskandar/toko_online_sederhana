@extends('partial.master')

@section('title','Edit Basket')

@section('container')

<h1 class="mt-5 text-center pt-5">Form Edit basket</h1>
<div class="container">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="/baskets/{{$basket->id}}" name="format">
@method('patch')
@csrf
  <div class="form-group">
    <label for="namabarang" class="d-inline">nama barang</label>
    <input type="text" id="namabarang" class="form-control @error('namabarang') is-invalid @enderror" name="namabarang" value="{{$basket->namabarang}}">
    <div class="invalid-feedback">
    @error('namabarang')
      {{$message}}
      @enderror
    </div>
  </div>
  <div class="form-group">
    <label for="hargabarang" class="d-inline">harga barang</label>
    <input type="number" id="hargabarang" class="form-control @error('hargabarang') is-invalid @enderror" id="hargabarang" name="hargabarang" value="{{$basket->hargabarang}}">
    <div class="invalid-feedback">
    @error('hargabarang')
      {{$message}}
      @enderror
    </div>
  </div>
  <div class="form-group">
    <label for="stok" class="d-inline">harga barang</label>
    <input type="number" id="stok" class="form-control @error('stok') is-invalid @enderror" id="stok" name="stok" value="{{$basket->stok}}">
    <div class="invalid-feedback">
    @error('stok')
      {{$message}}
      @enderror
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Ubah data</button>
</form>
</div>
@endsection