@extends('layouts.admin.master')
@section('judul','Review Post')
@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h4>@yield('judul')</h4>
    </div>
    <div class="card-body">
        <img src="{{ asset($post->gambar) }}" alt="Gambar Rusak" class="img-fluid mb-2" style="width: 500px">
        <h4>{{ $post->judul }}</h4>
        <p>{!! $post->konten !!}</p>
    </div>
    <div class="card-footer bg-whitesmoke d-flex justify-content-between">
        <small>Created: {{ $post->created_at }}</small>
        <small>Author: {{ $post->user->name }}</small>
    </div>
</div>

@endsection