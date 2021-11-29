@extends('partial.master')

@section('title','Tambah Basket')

@section('container')

<h1 class="mt-5 text-center pt-5">Form Tambah basket</h1>
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

<form method="post" action="/baskets" name="format" enctype="multipart/form-data">
@csrf
  <div class="form-group">
    <label for="namabarang" class="d-inline">nama barang</label>
    <input type="text" id="namabarang" name="namabarang" class="form-control">
    </div>
  <div class="form-group">
    <label for="hargabarang" class="d-inline">harga barang</label>
    <input type="number" id="hargabarang" class="form-control @error('hargabarang') is-invalid @enderror" id="hargabarang" name="hargabarang" value="{{old('hargabarang')}}">
    <div class="invalid-feedback">
    @error('hargabarang')
      {{$message}}
      @enderror
    </div>
  </div>
  {{-- <div class="form-group">
    <label for="jumlah_beli" class="d-inline">jumlah Beli</label>
    <input type="number"  class="form-control @error('jumlah_beli') is-invalid @enderror" id="jumlah_beli" name="jumlah_beli" value="{{old('jumlah_beli')}}" min="1">
    <div class="invalid-feedback">
    @error('jumlah_beli')
      {{$message}}
      @enderror
    </div>
  </div> --}}
  <div class="form-group">
    <label for="stok" class="d-inline">Stok</label>
    <input type="number"  class="form-control @error('stok') is-invalid @enderror" id="stok" name="stok" value="{{old('stok')}}">
    <div class="invalid-feedback">
    @error('stok')
      {{$message}}
      @enderror
    </div>
  </div>
  <div class="form-group">
    <label for="keterangan" class="d-inline">keterangan</label>
    <input type="text"  class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan" value="{{old('keterangan')}}">
    <div class="invalid-feedback">
    @error('keterangan')
      {{$message}}
      @enderror
    </div>
  </div>
  <div class="form-group">
    <label for="gambar" class="d-inline">Gambar</label>
    <input type="file" id="gambar" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar" value="{{old('gambar')}}">
    <div class="invalid-feedback">
    @error('gambar')
      {{$message}}
      @enderror
    </div>
  </div>
  {{-- <div class="form-group">
    <label for="totalharga" class="d-inline">totalharga</label>
    <input type="number" id="totalharga" class="form-control @error('totalharga') is-invalid @enderror" id="totalharga" name="totalharga" value="{{old('totalharga')}}" readonly>
    <div class="invalid-feedback">
    @error('totalharga')
      {{$message}}
      @enderror
    </div>
  </div> --}}
  <button type="submit" class="btn btn-primary">Tambah</button>
</form>
</div>
{{-- batas js --}}
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
  // $(document).ready(function(){
  //   $("#hargabarang, #jumlah_beli").keyup(function(){
  //     var hargabarang = $("#hargabarang").val();
  //     var jumlah_beli = $("#jumlah_beli").val();

  //     var totalharga = parseInt(hargabarang) * parseInt(jumlah_beli);
  //     $("#totalharga").val(totalharga);
  //   });
  // });
</script>
@endsection