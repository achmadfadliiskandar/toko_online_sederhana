@extends('layout.main')

@section('title','Detail Basket')

@section('container')

<h1 class="mt-5 text-center pt-5">Detail basket</h1>
<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <img src="/images/{{$basket->gambar}}" class="card-img-top border" width="100%" alt="">
    </div>
    <div class="col-sm-6">
      <form method="post" action="/barangs" name="format">
        @csrf
        <div class="form-group">
          <label for="baskets_id" class="d-inline">Nama Barang</label>
          <select class="form-control" id="baskets_id" onclick="munculkan()" name="baskets_id">
                  <option value="{{$basket->id}}">{{$basket->namabarang}}</option>          
          </select>
      </div>
        <div class="form-group">
          <label for="hargabarang" class="d-inline">Harga Barang</label>
          <input type="number"  class="form-control @error('hargabarang') is-invalid @enderror" id="hargabarang" name="hargabarang" value="{{$basket->hargabarang}}" readonly>
          <div class="invalid-feedback">
          @error('hargabarang')
          {{$message}}
          @enderror
          </div>
      </div>
      <div class="form-group">
          <label for="stok" class="d-inline">Jumlah Beli</label>
          <input type="number" class="form-control @error('stok') is-invalid @enderror" id="stok" name="stok" value="{{old('stok')}}" min="1">
          <div class="invalid-feedback">
          @error('stok')
          {{$message}}
          @enderror
          </div>
      </div>
      <div class="form-group">
        <label for="totalharga" class="d-inline">totalharga</label>
        <input type="number" id="totalharga" class="form-control @error('totalharga') is-invalid @enderror" id="totalharga" name="totalharga" value="{{old('totalharga')}}" readonly>
        <div class="invalid-feedback">
        @error('totalharga')
        {{$message}}
        @enderror
        </div>
    </div>
    <button type="submit" class="btn btn-primary w-100">Tambah</button>
      </form>
    </div>
  </div>
  <a href="/baskets" class="btn btn-warning my-3">Keluar/back</a>
{{-- <a href="/barangs/create" class="btn btn-primary my-3">Belanja</a> --}}
</div>
</div>
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
@endsection