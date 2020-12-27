@extends('layouts.admin.master')
@section('judul','Sejarah')
@section('content')
<div class="row-12">
    @if (session('sukses'))
    <div class="alert alert-success">
        {{ session('sukses') }}
    </div>
    @endif
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4>{{ $sejarah->judul }}</h4>
            <a href="{{ route('sejarah.edit', $sejarah->id) }}" class="btn btn-primary">
                Edit Sejarah
            </a>
        </div>
        <div class="card-body">
            <p>{!! $sejarah->konten !!}</p>
        </div>
        <div class="card-footer bg-whitesmoke d-flex justify-content-between">
            <small>Diupdate : {{ $sejarah->updated_at }}</small>
            <a href="{{ route('sejarah.index') }}" class="btn btn-sm btn-danger">
                Kembali
            </a>
        </div>
    </div>
</div>
@endsection