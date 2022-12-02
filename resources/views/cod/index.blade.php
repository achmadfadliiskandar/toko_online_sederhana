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
                <th scope="col">Kode ID</th>
                <th scope="col">Alamat Pengiriman</th>
                <th scope="col">Total Belanja</th>
                {{-- <th scope="col">Total Belanja</th> --}}
                {{-- <th scope="col">Kode Unik</th> --}}
            </tr>
            @foreach ($cod as $d)
            </thead>
            <tbody>
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$d->id}}</td>
                <td>{{$d->alamat_pengiriman}}</td>
                {{-- <td>{{$d->alamat}}</td> --}}
                <td>{{number_format($d->totalbelanja)}}</td>
                {{-- <td>{{$d->kode_unik}}</td> --}}
            </tr>
            @endforeach
            @forelse ($cod as $d)
            </tbody>
        @empty
        <td colspan="8" class="text-center text-danger">Anda Belum Pernah melakukan Pembayaran Cod</td>  
        @endforelse
        <div class="modal" tabindex="-1">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
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
            // echo "<button type='button' class='btn btn-primary w-100' data-toggle='modal' data-target='#staticBackdrop'>Konfirmasi</button>";
        }
    @endphp
        </div>
    {{-- <a href="/cod/create" class="btn btn-info d-block">Bayar dari rumah/cod sekarang</a> --}}
    </div>
    @endsection