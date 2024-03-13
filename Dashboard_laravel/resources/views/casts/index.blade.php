@extends('layouts.master')
@section('judul')
cast
@endsection
@section('content')
<!-- Tampilkan list data para pemain film -->
@foreach($casts as $cast)
    <div>{{ $cast->nama }} - {{ $cast->umur }} - {{ $cast->bio }}</div>
@endforeach

@endsection