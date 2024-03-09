@extends('layouts.master')
@section('judul')
Halaman Utama
@endsection
@section('content')
<div>{{ $cast->nama }} - {{ $cast->umur }} - {{ $cast->bio }}</div>
@endsection