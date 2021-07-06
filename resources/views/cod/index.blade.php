@extends('layout.main')

@section('title','History Cash On Delivery')
    
@section('container')
<div class="container">
    <h1 class="text-center mt-5 pt-5">Cash On Delivery (COD)</h1>
    {{-- <p class="text-center">Belanja Online Bayar Dirumah</p> --}}
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
    <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">NO</th>
            <th scope="col">No Telpon</th>
            <th scope="col">Alamat Pengantaran</th>
            <th scope="col">Waktu</th>
            <th scope="col">Pengiriman</th>
            <th scope="col">Barang yang di beli</th>
            {{-- <th scope="col">Total Belanja Anda</th> --}}
            <th scope="col">Nama Pembeli</th>
            <th scope="col">Total Belanja</th>
            <th scope="col">Kode Unik(tolong diingat baik2)</th>
          </tr>
          @foreach ($cod as $d)
        </thead>
        <tbody>
          <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$d->telpon}}</td>
            <td>{{$d->alamat}}</td>
            <td>{{$d->created_at}}</td>
            <td>{{$d->pengiriman}}</td>
            {{-- <td>{{$d->barang}}</td> --}}
            <td>{{$d->barangs_id}}</td>
            {{-- <td>{{ number_format($d->basket = Auth::user()->baskets->sum('totalharga')) }}</td> --}}
            <td>{{$d->user->name}}</td>
            <td>{{$d->totalbelanja}}</td>
            <td>{{$d->kode_unik}}</td>
          </tr>
          @endforeach
          @forelse ($cod as $d)
        </tbody>
      @empty
      <td colspan="8" class="text-center text-danger">Anda Belum Pernah melakukan Pembayaran Cod</td>  
      @endforelse
      <!-- Modal -->
      <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Refresh</h5>
            </div>
            <div class="modal-body">
              @forelse ($barangs as $barang)
                <h3>{{$barang->baskets->namabarang}}</h3>
                {{-- <strong>pilih yang mana saja</strong> --}}
                @empty
                <div class="alert alert-danger">{{"barang kosong"}}</div>
            @endforelse
            </div>
            <div class="modal-footer">
              @if ($barang >= 1)
              <a href="/barangs/hapus/{{$barang->user_id}}" class="btn btn-primary w-100"> <i class="fa fa-refresh fa-spin"></i> Refresh</a>
              @else
              <a href="/barangs" class="btn btn-primary w-100">Kembali</a>
              @endif
            </div>
          </div>
        </div>
      </table>
      @php
      /*for cod*/
      $cod = Auth::user()->cod->count('id');
      if ($cod < 1) {
        echo "<div class='alert alert-danger mt-4' role='alert'>
          Silahkan bayar cod terlebih dahulu
              </div>";
      }
      else{
        echo "<button type='button' class='btn btn-primary w-100' data-toggle='modal' data-target='#staticBackdrop'>Refresh</button>";
      }
@endphp
      </div>
{{-- <a href="/cod/create" class="btn btn-info d-block">Bayar dari rumah/cod sekarang</a> --}}
</div>
@endsection