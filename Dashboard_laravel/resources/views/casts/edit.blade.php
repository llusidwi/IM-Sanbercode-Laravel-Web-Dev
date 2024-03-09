@extends('layouts.master')
@section('judul')
Halaman Utama
@endsection
@section('content')
<form action="/cast/{{ $cast->id }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="nama" value="{{ $cast->nama }}">
    <input type="number" name="umur" value="{{ $cast->umur }}">
    <textarea name="bio">{{ $cast->bio }}</textarea>
    @error('nama')
        <div>{{ $message }}</div>
    @enderror
    @error('umur')
        <div>{{ $message }}</div>
    @enderror
    @error('bio')
        <div>{{ $message }}</div>
    @enderror
    <button type="submit">Simpan Perubahan</button>
</form>
<form action="/cast/{{ $cast->id }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Hapus</button>
</form>
@endsection