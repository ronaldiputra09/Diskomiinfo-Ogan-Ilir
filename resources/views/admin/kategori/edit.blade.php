@extends('layouts.admin.master')
@section('judul','Edit Kategori')
@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h4>@yield('judul')</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label>Nama kategori</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                    value="{{ $kategori->nama }}">
                @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <div class="form-group">
                    <a href="{{ route('kategori.index') }}" class="btn btn-danger">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection