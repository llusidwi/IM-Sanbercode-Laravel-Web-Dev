@extends('layouts.master')
@section('judul')
Halaman Utama
@endsection
@section('content')
<form action="/cast" method="POST">
    @csrf
    <input type="text" name="nama" placeholder="Nama">
    <input type="number" name="umur" placeholder="Umur">
    <textarea name="bio" placeholder="Bio"></textarea>
    @error('nama')
        <div>{{ $message }}</div>
    @enderror
    @error('umur')
        <div>{{ $message }}</div>
    @enderror
    @error('bio')
        <div>{{ $message }}</div>
    @enderror
    <button type="submit">Simpan</button>
</form>
@endsection