    @extends('layout.main')

    @section('title','Tambah Barang')

    @section('container')

    <h1 class="mt-5 text-center pt-5">Form Barang</h1>
    <div class="container">
    <form method="post" action="/barangs" name="format">
    @csrf
    <div class="form-group">
        <label for="baskets_id" class="d-inline">Nama Barang</label>
        <select class="form-control" id="baskets_id" onclick="munculkan()" name="baskets_id">
            @foreach ($baskets as $basket)
                <option value="{{$basket->id}}">{{$basket->namabarang}}</option>          
            @endforeach
            </select>
    </div>
    {{-- <div class="form-group">
        <label for="namabarang" class="d-inline">nama barang</label>
        <input type="text" id="namabarang" class="form-control @error('namabarang') is-invalid @enderror" id="namabarang" name="namabarang" value="{{old('namabarang')}}" readonly>
        <div class="invalid-feedback">
        @error('namabarang')
        {{$message}}
        @enderror
        </div>
    </div>
    <div class="form-group">
        <label for="hargabarang" class="d-inline">Harga Barang</label>
        <input type="number"  class="form-control @error('hargabarang') is-invalid @enderror" id="hargabarang" name="hargabarang" value="{{old('hargabarang')}}" min="1">
        <div class="invalid-feedback">
        @error('hargabarang')
        {{$message}}
        @enderror
        </div>
    </div> --}}
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
        <input type="number"  class="form-control @error('stok') is-invalid @enderror" id="stok" name="stok" value="{{old('stok')}}" min="1">
        <div class="invalid-feedback">
        @error('stok')
        {{$message}}
        @enderror
        </div>
    </div>
    {{-- <div class="form-group">
        <label for="keteranganbrg" class="d-inline">keterangan barang</label>
        <input type="text"  class="form-control @error('keteranganbrg') is-invalid @enderror" id="keteranganbrg" name="keteranganbrg" value="{{old('keteranganbrg')}}" readonly>
        <div class="invalid-feedback">
        @error('keteranganbrg')
        {{$message}}
        @enderror
        </div>
    </div> --}}
     <div class="form-group">
        <label for="totalharga" class="d-inline">totalharga</label>
        <input type="number" id="totalharga" class="form-control @error('totalharga') is-invalid @enderror" id="totalharga" name="totalharga" value="{{old('totalharga')}}" readonly>
        <div class="invalid-feedback">
        @error('totalharga')
        {{$message}}
        @enderror
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
    </div>
    {{-- <script>
    function munculkan(){
    var id_baskets = (document.format.id_baskets.value);
    var namabarang = ""
    var hargabarang = 0.0;
    var keteranganbrg = ""

    if (id_baskets == "1") {
        namabarang = "bola"
        hargabarang = 100000
        keteranganbrg = "Sepak bola, secara resmi dikenal sebagai sepak bola asosiasi, adalah cabang olahraga yang menggunakan bola yang umumnya terbuat dari bahan kulit dan dimainkan oleh dua tim yang masing-masing beranggotakan 11 orang pemain inti dan beberapa pemain cadangan dan barang kondisi baru"
    }
    else if(id_baskets == "2"){
        namabarang = "raket badminton"
        hargabarang = 200000
        keteranganbrg = "Bulu tangkis adalah suatu olahraga yang menggunakan alat yang berbentuk bulat dengan memiliki rongga rongga di bagian pemukulnya. Dan memiliki gagang. Alat ini dikenal dengan nama raket yang dimainkan oleh dua orang atau dua pasangan yang saling berlawanan. dan barang kondisi baru"
    }
    else if(id_baskets == "3"){
        namabarang = "Bola Basket"
        hargabarang = 150000
        keteranganbrg = "bola bagus dalam kondisi baru"
    }
    else{
        hargabarang = ""
        namabarang = ""
        hargabarang = i;
        keteranganbrg = ""
    }
    document.format.hargabarang.value = hargabarang
    document.format.namabarang.value = namabarang
    document.format.keteranganbrg.value = keteranganbrg
    } --}}
    {{-- // </script> --}}
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