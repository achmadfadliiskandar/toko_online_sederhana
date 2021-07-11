@extends('layout.main')

@section('title','Edit User')

@section('container')
<div class="container">
    <h1 class="mt-5 pt-5">Edit Data : {{$user->name}}</h1>
    <form action="/user/update/{{$user->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
        <label for="name">Nama</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{$user->name}}">
        </div>
        <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{$user->password}}">
        </div>
        <div class="form-group">
        <label for="gambar">Gambar</label>
        <img src="/gambaruser/{{$user->gambar}}" class="my-2" alt="" width="100">
        <input type="file" class="form-control-file" id="gambar" name="gambar">
        </div>
        <div class="form-group">
        <label for="address">Alamat</label>
        <input type="address" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{$user->address}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection