@extends('layouts.master')
@section('judul')
Halaman Utama
@endsection
@section('content')
<div>{{ $cast->nama }} - {{ $cast->umur }} - {{ $cast->bio }}</div>
<form action="/cast/{{ $cast->id }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Hapus</button>
</form>
@endsection