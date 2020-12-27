@extends('layouts.admin.master')
@section('judul','Tambah Galeri')
@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h4>@yield('judul')</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Gambar</label>
                <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar"
                    value="{{ old('gambar') }}">
                @error('gambar')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <input type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan"
                    value="{{ old('keterangan') }}">
                @error('keterangan')
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