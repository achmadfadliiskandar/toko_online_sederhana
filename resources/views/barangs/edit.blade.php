@extends('layout.main')

@section('title','Edit barang')

@section('container')

<h1 class="mt-5 text-center pt-5">Form Edit barang</h1>
<div class="container">

<form method="post" action="/barangs/{{$barang->id}}">
@method('put')
@csrf
<div class="form-group">
    <label for="namabarang" class="d-inline">Nama barang</label>
    <input type="text" id="namabarang" class="form-control @error('namabarang') is-invalid @enderror" name="namabarang" value="{{$barang->namabarang}}" readonly>
    <div class="invalid-feedback">
    @error('namabarang')
    {{$message}}
    @enderror
    </div>
</div>
<div class="form-group">
    <label for="hargabarang" class="d-inline">Harga barang</label>
    <input type="text" id="hargabarang" class="form-control @error('hargabarang') is-invalid @enderror" name="hargabarang" value="{{$barang->hargabarang}}" min="1" readonly>
    <div class="invalid-feedback">
    @error('hargabarang')
    {{$message}}
    @enderror
    </div>
</div>
<div class="form-group">
    <label for="stok" class="d-inline">Jumlah Beli</label>
    <input type="number" id="stok" class="form-control @error('stok') is-invalid @enderror" id="stok" name="stok" value="{{$barang->stok}}">
    <div class="invalid-feedback">
    @error('stok')
    {{$message}}
    @enderror
    </div>
</div>
<div class="form-group">
    <label for="totalharga" class="d-inline">Total Harga</label>
    <input type="number" id="totalharga" class="form-control @error('totalharga') is-invalid @enderror" id="totalharga" name="totalharga" value="{{$barang->totalharga}}" readonly>
    <div class="invalid-feedback">
    @error('totalharga')
    {{$message}}
    @enderror
</div>
</div>
<button type="submit" class="btn btn-primary">Ubah data</button>
</form>
</div>
@endsection
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
    $("#hargabarang, #stok").keyup(function(){
        var hargabarang = $("#hargabarang").val();
        var stok = $("#stok").val();

        var totalharga = parseInt(hargabarang) * parseInt(stok);
        $("#totalharga").val(totalharga);
    });
    });
    </script>