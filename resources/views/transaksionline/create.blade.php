@extends('layout.main')

@section('title','Form Transaksi')
    
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
@if ($message = Session::get('status'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button> 
    <strong>{{ $message }}</strong>
</div>
@endif
@if (count($barangs)>=1)
<form method="POST" action="/transaksionline" enctype="multipart/form-data">
    @csrf
    <div class="form-group" style="display: none;">
    <label for="barangs_id">Barang<sup>2</sup> yang di belanjakan</label>
    <input type="text" class="form-control" name="barangs_id" style="display: none;" readonly  value="@foreach ($barangs as $barang){{$barang->baskets->namabarang}} {{number_format($barang->baskets->hargabarang)}} : {{$barang->stok}} = {{number_format($barang->totalharga)}}
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
    <div class="form-group">
    <label for="totalbelanja">Total Belanja</label>
    <input type="text" class="form-control" id="totalbelanja" name="totalbelanja" value="{{ number_format($basket = Auth::user()->barangs->sum('totalharga'))}}" readonly>
    </div>  
    <button type="submit" class="btn btn-primary">Bayar Sekarang</button>
</form>
@else
<script>
    alert("silahkan belanja dulu terima kasih",window.location.assign("http://127.0.0.1:8000/barangs"))
    </script>
    <div class="alert alert-danger">silahkan belanja dulu terima kasih</div>  
@endif
</div>
@endsection