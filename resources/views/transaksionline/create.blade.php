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
            <form method="POST" action="/transaksionline" enctype="multipart/form-data">
                @csrf
                <div class="form-group" style="display: none;">
                <label for="barangs_id">Barang<sup>2</sup> yang di belanjakan</label>
                <input type="text" class="form-control" name="barangs_id" style="display: none;" readonly  value="@foreach ($barangs as $barang)
                {{$barang->baskets->namabarang}} {{number_format($barang->baskets->hargabarang)}} : {{$barang->stok}} = {{number_format($barang->totalharga)}}
                @endforeach">
                </div>
                <div class="form-group">
                <label for="kartu">Kartu</label>
                <input type="text" class="form-control" id="kartu" name="kartu">
                </div>
                <div class="form-group">
                <label for="bukti">Bukti Pembayaran</label>
                <input type="file" class="form-control-file" id="bukti" name="bukti">
                </div>
                <div class="form-group">
                    <label for="pengiriman">Pengiriman</label>
                    <select class="form-control" id="pengiriman" name="pengiriman">
                    {{-- <option>Gojek</option>
                    <option>Grab</option> --}}
                    <option>LOREM IPSUM EXPRESS</option>
                    </select>
                    </div>
                <div class="form-group">
                    <label for="alamatpengiriman">Alamat Pengiriman</label>
                    <input type="text" class="form-control" id="alamatpengiriman" name="alamatpengiriman">
                    </div>  
                    {{-- {{number_format(Auth::user()->baskets->sum('totalharga'))}} --}}
                    {{-- <div class="form-group">
                        <label for="barang">Barang</label>
                        <textarea class="form-control" id="barang" name="barang" rows="3">
                        </textarea>
                        </div>   --}}
                        <div class="form-group" style="display: none;">
                          <label for="baskets_id" class="d-inline">Pemilik barang</label>
                          <input type="text" class="form-control" id="baskets_id" style="display: none;" name="baskets_id" value="@foreach ($barangs as $barang)
                          {{$barang->baskets->user->name}}
                          @endforeach" readonly>
                          </div>
                <div class="form-group" style="display: none;">
                <label for="totalbelanja">Total Belanja</label>
                <input type="text" class="form-control" id="totalbelanja" name="totalbelanja" value="
                {{$basket = Auth::user()->barangs->sum('totalharga')}}
                " style="display: none;" readonly>
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