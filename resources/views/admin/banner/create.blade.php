@extends('layouts.admin.master')
@section('judul','Tambah Banner')
@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h4>@yield('judul')</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Banner</label>
                <input type="file" class="form-control @error('banner') is-invalid @enderror" name="banner"
                    value="{{ old('banner') }}">
                @error('banner')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                <small class="text-danger">note: Diwajibkan ukuran 1500x300</small>
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
                <a href="{{ route('banner.index') }}" class="btn btn-danger">Kembali</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>

@endsection