@extends('layout.main')

@section('title',' Cash On Delivery (COD)')
    
@section('container')
<div class="container">
    <h1 class="text-center mt-5 pt-5">Cash On Delivery (COD)</h1>
    <p class="text-center">berikan alamat dan No telpon yang jelas ya!! Dan Benar</p>
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
            <form method="POST" action="/cod/store" id="form">
                @csrf
                <div class="form-group">
                <label for="barangs_id">Barang<sup>2</sup> yang di belanjakan</label>
                <select class="form-control" id="barangs" onclick="munculkan()" name="barangs">
                      <option value="{{$barang->id}}">
                        @foreach ($barangs as $barang)
                      {{$barang->baskets->namabarang}}        
                      @endforeach 
                    </option> 
                  </select>
                  {{-- <input type="text" readonly name="barangs_id" id="barangs_id" class="form-control" value="@foreach ($barangs as $barang) {{$barang->baskets->namabarang}}, @endforeach"> --}}
                </div>
                <div class="form-group">
                <label for="stok" class="d-inline">Stok Belanja Anda</label>
                <input type="text" class="form-control" id="stok" name="stok" readonly value="@foreach ($barangs as $barang){{$barang->stok}}@endforeach">
                {{-- <small>untuk mengetahui alamat jika Pengantaran terhambat</small> --}}
                </div>
                <div class="form-group">
                <label for="alamat_pengantaran" class="d-inline">Alamat Pengantaran</label>
                <input type="text" class="form-control" id="alamat_pengiriman" name="alamat_pengiriman">
                </div>
                    <div class="form-group">
                      <label for="baskets_id" class="d-inline">Pemilik barang</label>
                      <select name="baskets_id" class="form-control" id="baskets_id">
                        <option value="{{$barang->baskets_id}}">
                          @foreach ($barangs as $barang)
                          {{$barang->baskets->user->name}}
                          @endforeach  
                        </option>        
                      </select>
                      </div>
                    <div class="form-group">
                    <label for="totalbelanja" class="d-inline">total belanja</label>
                    <input type="text" class="form-control" id="totalbelanja" name="totalbelanja" value="{{$basket = Auth::user()->barangs->sum('totalharga')}}" readonly>
                    </div>
            {{-- </form> --}}
          </div>
        </div>
        <button type="submit" class="btn btn-primary btn btn-block">Bayar Sekarang</button>
      </form>
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