@extends('layout.main')

@section('title','Edit User')

@section('container')
<div class="container">
    <h1 class="mt-5 pt-5">Edit Data : {{$user->name}}</h1>
    <form action="/user/update/{{$user->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
        <label for="name">Nama</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{$user->name}}">
        </div>
        {{-- <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{$user->password}}">
        </div> --}}
        {{-- @if ($user->gambar)
        <img src="/gambaruser/{{$user->gambar}}" width="100" alt="">
        <input type="file" class="form-control-file mt-2" id="gambar" name="gambar">
        @else
        <input type="file" class="form-control-file" id="gambar" name="gambar">
        <strong>nggak ada gambar</strong>
        @endif --}}
        <div class="form-group">
        <label for="address">Alamat</label>
        <input type="address" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{$user->address}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection