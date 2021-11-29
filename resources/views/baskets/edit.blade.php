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

<form method="post" action="/baskets/{{$basket->id}}" name="format" enctype="multipart/form-data">
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
    <label for="stok" class="d-inline">stok</label>
    <input type="number" id="stok" class="form-control @error('stok') is-invalid @enderror" id="stok" name="stok" value="{{$basket->stok}}">
    <div class="invalid-feedback">
    @error('stok')
      {{$message}}
      @enderror
    </div>
  </div>
  <div class="form-group">
    <label for="keterangan" class="d-inline">keterangan</label>
    <input type="text"  class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan" value="{{$basket->keterangan}}">
    <div class="invalid-feedback">
    @error('keterangan')
      {{$message}}
      @enderror
    </div>
  </div>
  <div class="form-group">
    <label for="gambar" class="d-inline">Gambar</label>
    <input type="file" id="gambar" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar" value="{{$basket->gambar}}">
    <div class="invalid-feedback">
    @error('gambar')
      {{$message}}
      @enderror
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Ubah data</button>
</form>
</div>
@endsection