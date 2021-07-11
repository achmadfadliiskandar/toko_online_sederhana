@extends('partial.master')
@push('style')
    <link rel="stylesheet" href="{{asset('AdminLTE-3.0.5/plugins/datatables-bs4/css/datatables.bootstrap4.min.css')}}">
@endpush
@section('title','Data User')
@section('container')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">DataTable with default features</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Role</th>
            <th>Alamat</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @forelse($users as $no => $user)
            <td>{{$no+1}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->role}}</td>
            <td>{{$user->address}}</td>
            <td>
                <a href="/user/edit/{{$user->id}}" class="btn btn-success">Edit</a>
                <form action="/user/hapus/{{$user->id}}" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
            @empty
            <td class="text-center">tidak ada</td>
            @endforelse
        <tr>
        </tbody>
        </table>
    </div>
    <!-- /.card-body -->
    </div>

    @push('script')
    <script src="{{asset('AdminLTE-3.0.5/plugins/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('AdminLTE-3.0.5/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
    <script>
    $(function () {
        $("#example1").DataTable();
    });
    </script>
    @endpush
    @endsection

