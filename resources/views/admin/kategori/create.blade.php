@extends('layouts.admin.master')
@section('judul','Tambah Kategori')
@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h4>@yield('judul')</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('kategori.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Nama Kategori</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                    value="{{ old('nama') }}">
                @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <a href="{{ route('kategori.index') }}" class="btn btn-danger">Kembali</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>

@endsection