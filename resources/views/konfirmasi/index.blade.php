@extends('partial.master')

@section('title'," Konfirmasi Pengantaran")

@section('container')
<div class="container">
<h2 class="mt-5 pt-3 text-center">Konfirmasi Pengantaran</h2>
<table class="table table table-striped">
    <thead class="bg-dark text-white">
    <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Email</th>
        {{-- <th scope="col">Status</th> --}}
        <th scope="col">Pengantaran</th>
    </tr>
    </thead>
    <tbody class="mt-5">
    <tr>
        @forelse ($konfirmasi as $konfirm)
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$konfirm->user->name}}</td>
        <td>{{$konfirm->user->email}}</td>
        {{-- <td>{{$konfirm->status}}</td> --}}
        <td>{{$konfirm->pengantaran}}</td>
    </tr>
    @empty
    <td colspan="5" class="text-center text-danger">tidak ada konfirmasi</td>
@endforelse
    </tbody>
</table>
{{-- <a href="/" class="btn btn-secondary">Kembali/back</a> --}}
</div>
</div>
@endsection