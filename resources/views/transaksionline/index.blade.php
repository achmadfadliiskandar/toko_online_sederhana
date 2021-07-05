    @extends('layout.main')

    @section('title','Data Transaksi Online')

    @section('container')
            <h1 class="text-center mt-5 pt-4">Transaksi Online</h1>
            <div class="container">
            @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
            {{-- <p class="text-center">
                data yang bertujuan untuk mengetahui user sudah pernah mengirim pembayaran melalui transaksi 
            </p> --}}
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Barang yang di belanjakan</th>
                    <th scope="col">Kartu</th>
                    <th scope="col">Bukti</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Pengiriman</th>
                    <th scope="col">Alamat Pengiriman</th>
                    <th scope="col">Total bayar</th>
                    {{-- <th scope="col">Barang</th> --}}
                </tr>
                </thead>
                <tbody>
                    @forelse ($transaksionlines as $saksi)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$saksi->barangs_id}}</td>
                        <td>{{$saksi->kartu}}</td>
                        <td><img src="/image/{{$saksi->bukti}}" alt="gambar"></td>
                        <td>{{$saksi->created_at}}</td> 
                        <td>{{$saksi->user->name}}</td> 
                        <td>{{$saksi->pengiriman}}</td>
                        <td>{{$saksi->alamatpengiriman}}</td> 
                        <td>{{$saksi->totalbelanja}}</td>
                        {{-- <td>{{$saksi->barang}}</td> --}}
                    </tr>
                    @empty
                    <td colspan="9" class="text-center">Anda belum pernah Pembayaran Online</td>
                    <tr>
                    @endforelse
                </tbody>
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
                    <a href="/barangs/hapus/{{$barang->user_id}}" class="btn btn-primary w-100"> <i class="fa fa-refresh fa-spin"></i> Refresh</a>
                    <strong>Pilih yang mana saja</strong>
                    @empty
                    <div class="alert alert-danger">{{"barang kosong"}}</div>
                @endforelse
                </div>
                <div class="modal-footer">
                {{-- <a href="/barangs/hapus/{{$barang->user_id}}" class="btn btn-primary w-100"> <i class="fa fa-refresh fa-spin"></i> Refresh</a> --}}
                </div>
            </div>
            </div>
            </table>
        @php
        // $basket = Auth::user()->baskets->sum('totalharga');
        // echo "<br>";
        // echo "Total Semua  Rp . ";
        // echo number_format($basket);
        // // for transaksionline
        $saksi = Auth::user()->transaksionlines->count('id');
        if ($saksi < 1) {
            echo "<div class='alert alert-danger mt-5'>silahkan melakukan transaksi terlebih dahulu</div>";
        }
        else {
            echo "<button type='button' class='btn btn-primary w-100' data-toggle='modal' data-target='#staticBackdrop'>Refresh</button>";
        }
        @endphp
            {{-- <a href="/transaksionline/create" class="btn btn-outline-dark d-block">Bayar dengan transaksi online sekarang</a> --}}
        </div>
    @endsection