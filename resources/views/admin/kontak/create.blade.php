@extends('layouts.admin.master')
@section('judul','Tambah Kontak')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/modules/summernote/summernote-bs4.css') }}">
@endsection
@section('content')
<div class="row-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4>@yield('judul')</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('kontak.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                        value="{{ old('nama') }}">
                    @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                        value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Pesan</label>
                    <textarea name="pesan" class="form-control summernote"></textarea>
                    <small class="text-danger">note: disarankan untuk memasukan gambar menggunakan link url.</small>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 col-md-7">
                        <a href="{{ route('agenda.index') }}" class="btn btn-danger">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="{{ asset('assets/modules/summernote/summernote-bs4.js') }}"></script>
@endsection