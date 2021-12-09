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
            <div class="col-md-12 mb-3">
                <form method="POST" action="/cod/store" id="form">
                    @csrf
                    <div id="inputbaris">
                        <label for="barangs_id">Barang Yang Dibelanjakan</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="barangs_id" name="barangs_id[]">
                            <div class="input-group-append">
                                <button class="btn btn-outline-danger" type="button" id="hapusbaris">Hapus Barang Yang Dibelanjakan</button>
                            </div>
                        </div>
                        <div id="barisbaru"></div>
                    </div>
                    <div id="inputbarisstok">
                        <label for="stok">Jumlah Barang Yang Dibelanjakan</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="stok" name="stok[]">
                            <div class="input-group-append">
                                <button class="btn btn-outline-danger" type="button" id="hapusbarisstok">Hapus Stok</button>
                            </div>
                        </div>
                        <div id="barisbarustok"></div>
                    </div>
                    <div id="inputbarisalamat_pengiriman">
                        <label for="alamat_pengiriman">Alamat Pengiriman Barang</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="alamat_pengiriman" name="alamat_pengiriman[]">
                            <div class="input-group-append">
                                <button class="btn btn-outline-danger" type="button" id="hapusbarisalamat_pengiriman">Hapus Alamat Pengiriman</button>
                            </div>
                        </div>
                        <div id="barisbarualamat_pengiriman"></div>
                    </div>
                    <div id="inputbaristotalbelanja">
                        <label for="totalbelanja">Total Belanja</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="totalbelanja" name="totalbelanja[]">
                            <div class="input-group-append">
                                <button class="btn btn-outline-danger" type="button" id="hapusbaristotalbelanja">Hapus Total Belanja</button>
                            </div>
                        </div>
                        <div id="barisbarutotalbelanja"></div>
                    </div>
                    <div id="inputbarisbaskets_id">
                        <label for="baskets_id">Pemilik Barang</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="baskets_id" name="baskets_id[]">
                            <div class="input-group-append">
                                <button class="btn btn-outline-danger" type="button" id="hapusbarisbaskets_id">Hapus Pemilik Barang</button>
                            </div>
                        </div>
                        <div id="barisbarubaskets_id"></div>
                    </div>
                <button class="btn btn-success" id="tambahbaris" type="button">Tambah Baris</button>
                <button class="btn btn-secondary" id="tambahbarisstok" type="button">Tambah Baris stok</button>
                <button class="btn btn-warning" id="tambahbarisalamat_pengiriman" type="button">Tambah Baris Alamat Pengiriman</button>
                <button class="btn btn-info my-3" id="tambahbaristotalbelanja" type="button">Tambah Total Belanja</button>
                <button class="btn btn-dark my-3" id="tambahbarisbaskets_id" type="button">Tambah Pemilik Barang</button>
                <button class="btn btn-primary">Submit</button>
                </div>
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
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript">
        // alert("tesbro")
        // baris barangs id
        $("#tambahbaris").click(function () {
            var html = '';
            html += '<div id="inputbaris">';
            html += '<label for="barangs_id">Barang Yang Dibelanjakan</label>';
            html += '<div class="input-group mb-3">';
            html += '<input type="text" class="form-control" id="barangs_id" name="barangs_id[]">';
            html += '<div class="input-group-append">';
            html += '<button class="btn btn-outline-danger" type="button" id="hapusbaris">Hapus Barang Yang Dibelanjakan</button>';
            html += '</div>';
            html += '</div>';

            $('#barisbaru').append(html);
        });

        $(document).on('click','#hapusbaris',function(){
            $(this).closest('#inputbaris').remove();
        });
        // end baris barangs id

        // baris stok
        $("#tambahbarisstok").click(function () {
            var html = '';
            html += '<div id="inputbarisstok">';
            html += '<label for="stok">Jumlah Barang Yang Dibelanjakan</label>';
            html += '<div class="input-group mb-3">';
            html += '<input type="text" class="form-control" id="stok" name="stok[]">';
            html += '<div class="input-group-append">';
            html += '<button class="btn btn-outline-danger" type="button" id="hapusbarisstok">Hapus Stok</button>';
            html += '</div>';
            html += '</div>';

            $('#barisbarustok').append(html);
        });

        $(document).on('click','#hapusbarisstok',function(){
            $(this).closest('#inputbarisstok').remove();
        });
        // end baris stok

        // baris alamat pengiriman
        $("#tambahbarisalamat_pengiriman").click(function () {
            var html = '';
            html += '<div id="inputbarisalamat_pengiriman">';
            html += '<label for="alamat_pengiriman">Alamat Pengiriman</label>';
            html += '<div class="input-group mb-3">';
            html += '<input type="text" class="form-control" id="alamat_pengiriman" name="alamat_pengiriman[]">';
            html += '<div class="input-group-append">';
            html += '<button class="btn btn-outline-danger" type="button" id="hapusbarisalamat_pengiriman">Hapus Alamat Pengiriman</button>';
            html += '</div>';
            html += '</div>';

            $('#barisbarualamat_pengiriman').append(html);
        });

        $(document).on('click','#hapusbarisalamat_pengiriman',function(){
            $(this).closest('#inputbarisalamat_pengiriman').remove();
        });
        // end baris alamat pengiriman

        // baris total belanja
        $("#tambahbaristotalbelanja").click(function () {
            var html = '';
            html += '<div id="inputbaristotalbelanja">';
            html += '<label for="totalbelanja">Total Belanja</label>';
            html += '<div class="input-group mb-3">';
            html += '<input type="text" class="form-control" id="totalbelanja" name="totalbelanja[]">';
            html += '<div class="input-group-append">';
            html += '<button class="btn btn-outline-danger" type="button" id="hapusbaristotalbelanja">Hapus Total Belanja</button>';
            html += '</div>';
            html += '</div>';

            $('#barisbarutotalbelanja').append(html);
        });

        $(document).on('click','#hapusbaristotalbelanja',function(){
            $(this).closest('#inputbaristotalbelanja').remove();
        });
        // end baris total belanja

        // baris baskets id
        $("#tambahbarisbaskets_id").click(function () {
            var html = '';
            html += '<div id="inputbarisbaskets_id">';
            html += '<label for="baskets_id">Pemilik Barang</label>';
            html += '<div class="input-group mb-3">';
            html += '<input type="text" class="form-control" id="baskets_id" name="baskets_id[]">';
            html += '<div class="input-group-append">';
            html += '<button class="btn btn-outline-danger" type="button" id="hapusbarisbaskets_id">Hapus Pemilik Barang</button>';
            html += '</div>';
            html += '</div>';

            $('#barisbarubaskets_id').append(html);
        });

        $(document).on('click','#hapusbarisbaskets_id',function(){
            $(this).closest('#inputbarisbaskets_id').remove();
        });
        // end baris baskets id
    </script>
    @endsection