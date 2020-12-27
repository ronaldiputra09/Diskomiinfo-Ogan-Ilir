@extends('layouts.admin.master')
@section('judul','Sambutan')
@section('content')
<div class="row-12">
    @if (session('sukses'))
    <div class="alert alert-success">
        {{ session('sukses') }}
    </div>
    @endif
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4>{{ $sambutan->judul }}</h4>
            <a href="{{ route('sambutan.edit', $sambutan->id) }}" class="btn btn-primary">
                Edit sambutan
            </a>
        </div>
        <div class="card-body">
            <p>{!! $sambutan->konten !!}</p>
        </div>
        <div class="card-footer bg-whitesmoke d-flex justify-content-between">
            <small>Diupdate : {{ $sambutan->updated_at }}</small>
            <a href="{{ route('sambutan.index') }}" class="btn btn-sm btn-danger">
                Kembali
            </a>
        </div>
    </div>
</div>
@endsection