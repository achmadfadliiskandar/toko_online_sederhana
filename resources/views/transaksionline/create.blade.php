@extends('layout.main')

@section('title',' Transaksi Online')
    
@section('container')
<div class="container">
    <h1 class="text-center mt-5 pt-3">Form Transaksi</h1>
    <p class="text-center">Silahkan Melakukan Transaksi di sini transaksi ke no rekening : 12345678</p>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (count($barangs)>=1)
<div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
        <span class="badge badge-secondary badge-pill">{{number_format(Auth::user()->barangs->count("id"))}}</span>
      </h4>
      <ul class="list-group mb-3">
        @foreach($barangs as $key => $barang)
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0 text-uppercase">{{$barang->baskets->namabarang}}</h6>
            <small class="text-muted">Rp {{number_format($barang->baskets->hargabarang)}}</small>
            <small class="text-muted"> x {{$barang->stok}}</small>
          </div>
          <span class="text-muted">Total : {{number_format($barang->totalharga)}}</span>
        </li>
        @endforeach
        <li class="list-group-item d-flex justify-content-between">
          <span>Total Harga</span>
          <strong>Rp {{number_format(Auth::user()->barangs->sum("totalharga"))}}</strong>
        </li>
      </ul>
    </div>
    <div class="col-md-8 order-md-1">
        <div class="row">
        <div class="col-md-12 mb-3">
            <form method="POST" action="/transaksionline/store" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                <label for="kartu">Kartu</label>
                <input type="text" class="form-control" id="kartu" name="kartu">
                </div>
                <div class="form-group">
                <label for="bukti">Bukti Pembayaran</label>
                <input type="file" class="form-control-file" id="bukti" name="bukti">
                </div>
                <div class="form-group">
                <label for="alamatpengiriman">Alamat Pengiriman</label>
                <input type="text" class="form-control" id="alamat_pengiriman" name="alamat_pengiriman">
                </div>
                <div class="form-group">
                  @foreach ($barangs as $barang)
                  <label for="barangs_id">Barang<sup>2</sup> yang di belanjakan</label>
                  <select class="form-control" id="barangs" onclick="munculkan()" name="barangs_id[]">
                  <option value="{{$barang->id}}">
                  {{$barang->baskets->namabarang}}        
                  </option> 
                  </select>
                  @endforeach 
                  </div>
                  <div class="form-group" style="display: none;">
                    <label for="totalbelanja">Total Belanja</label>
                    <input type="text" class="form-control" id="totalbelanja" name="totalbelanja" value="
                    {{$basket = Auth::user()->barangs->sum('totalharga')}}
                    " style="display: none;" readonly>
                    </div>  
                  <div class="form-group">
                      @foreach ($barangs as $barang)
                  <label for="hargabeli">harga barang yang dibeli</label>
                  <select class="form-control" id="hargabeli" onclick="munculkan()" name="hargabeli[]">
                  <option value="{{$barang->totalharga}}">
                  {{$barang->totalharga}}        
                  </option> 
                  </select>
                  @endforeach 
                  </div>
                  
                  <div class="form-group">
                      @foreach ($barangs as $barang)
                  <label for="stok" class="d-inline">Stok Belanja Anda</label>
                  <select class="form-control" id="barangs" onclick="munculkan()" name="stok[]">
                  <option value="{{$barang->stok}}">
                  {{$barang->stok}}        
                  </option>
                  </select>
                  @endforeach 
                  </div>
                  
                  <div class="form-group">
                  @foreach ($barangs as $barang)
                  <label for="baskets_id">Pemilik Barang</label>
                  <select class="form-control" id="baskets" name="baskets_id[]">
                  <option value="{{$barang->baskets_id}}">
                  {{$barang->baskets->user->name}}        
                  </option> 
                  </select>
                  @endforeach 
                  </div>
                  <div class="form-group">
                    @foreach ($barangs as $barang)
                    <label for="baskets_id">Kode Unik</label>
                    <select class="form-control" id="baskets" name="kodeunik[]">
                    <option>    
                    <?php
                    echo(mt_rand(19,200))
                    ?>  
                    </option> 
                    </select>
                    @endforeach 
                    </div>
                <button type="submit" class="btn btn-primary">Bayar Sekarang</button>
            </form>
    </div>
        </div>
    </div>
</div>
@else
<script>
alert("silahkan belanja dulu terima kasih",window.location.assign("http://127.0.0.1:8000/barangs"))
</script>
<div class="alert alert-danger">silahkan belanja dulu terima kasih</div>
@endif
</div>
@endsection