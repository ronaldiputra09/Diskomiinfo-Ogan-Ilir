@extends('layouts.admin.master')
@section('judul','Tambah Struktur')
@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h4>@yield('judul')</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('struktur.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>File Struktur</label>
                <input type="file" class="form-control @error('struktur') is-invalid @enderror" name="struktur"
                    value="{{ old('struktur') }}">
                @error('struktur')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <a href="{{ route('struktur.index') }}" class="btn btn-danger">Kembali</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>

@endsection