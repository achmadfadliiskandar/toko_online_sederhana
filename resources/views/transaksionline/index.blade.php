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
                    <th scope="col">Kartu</th>
                    <th scope="col">Bukti</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat Pengiriman</th>
                    {{-- <th scope="col">Kode Unik</th> --}}
                    <th scope="col">Total bayar</th>
                    {{-- <th scope="col">Barang</th> --}}
                    <th scope="col">Status Pembayaran</th>
                </tr>
                </thead>
                <tbody>
                    @forelse ($transaksionlines as $saksi)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$saksi->kartu}}</td>
                        <td><img src="/image/{{$saksi->bukti}}" width="150" alt="gambar"></td>
                        <td>{{$saksi->created_at}}</td> 
                        <td>{{$saksi->user->name}}</td> 
                        <td>{{$saksi->alamat_pengiriman}}</td>
                        {{-- <td>{{$saksi->kode_unik}}</td> --}}
                        <td>{{number_format($saksi->totalbelanja)}}</td>
                        <td>
                        @if ($saksi->status < 0)
                        <a href="/transaksionline/edit/{{$saksi->id}}" class="btn btn-success">Lunaskan sekarang</a>
                        @else
                        <button class="btn btn-success">sudah lunas</button>
                        <a href="/historytransaksionline/{{$saksi->id}}" class="btn btn-secondary">Lihat Detail</a>
                        @endif
                    </td>
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
                    {{-- <strong>Pilih yang mana saja</strong> --}}
                    @empty
                    <div class="alert alert-danger">{{"barang kosong"}}</div>
                @endforelse
                </div>
                <div class="modal-footer">
                @if ($barang >= 1)
                @if ($saksi->status < 0)
                <a href="/transaksionline" class="btn btn-warning w-100">ke transaksi online</a>
                @else
                <marquee direction="left" width="100%;"><strong class="text-danger">Pengumuman : </strong>pilih lah barang sesuai kebutuhan jika sudah sesuai silahkan ketik konfirmasi dan juga jangan melompat/klik melalui input ketik ke transaksionlines jika melompat lalu menekan tombol konfirmasi maka mohon maaf data dianggap tidak beli terima kasih</marquee>
                <a href="/barangs/hapus/{{$barang->user_id}}" class="btn btn-primary w-100"> <i class="fa fa-refresh fa-spin"></i>Konfirmasi</a>
                @endif
                @else
                <a href="/barangs" class="btn btn-primary w-100">Kembali</a>
                @endif
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
        if ($saksi->status < 0) {
            echo "<div class='alert alert-danger mt-5'>silahkan melakukan transaksi terlebih dahulu</div>";
        }
        else{
            // echo "<button type='button' class='btn btn-primary w-100' data-toggle='modal' data-target='#staticBackdrop'>Konfirmasi</button>";
        }
        @endphp
            {{-- <a href="/transaksionline/create" class="btn btn-outline-dark d-block">Bayar dengan transaksi online sekarang</a> --}}
        </div>
    @endsection