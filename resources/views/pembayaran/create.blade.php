    @extends('layout.main')

    @section('title','Form Pembayaran')

    @section('container')
    <div class="container mt-5 pt-4">
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
        <h1 class="text-center">Form Pembayaran</h1>
        <p class="text-center">Silahkan bayar di sini</p>
        <form method="POST" action="/pembayaran">
            @csrf
            <div class="form-group">
            <label for="hargasemua">Totalharga</label>
            <input type="number" class="form-control" id="hargasemua" name="hargasemua">
            <small>Tempelkan/Pastekan Data totalharganya di sini dengan ctrl v dan jangan di ganti harganya  </small>
            </div>
            <div class="form-group">
            <label for="bayar">Pembayaran</label>
            <input type="number" class="form-control" id="bayar" name="bayar">
            </div>
            <div class="form-group">
            <label for="kembalian">Kembalian</label>
            <input type="number" class="form-control" id="kembalian" name="kembalian">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $("#bayar, #hargasemua").keyup(function() {
            var hargasemua  = $("#hargasemua").val();
            var bayar = $("#bayar").val();

            var kembalian = parseInt(bayar) - parseInt(hargasemua);
            $("#kembalian").val(kembalian);
        });
    });
    </script>
    @endsection