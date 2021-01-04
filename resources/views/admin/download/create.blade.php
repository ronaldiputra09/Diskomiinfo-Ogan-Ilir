@extends('layouts.admin.master')
@section('judul','Tambah File')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-daterangepicker/daterangepicker.css') }}">
@endsection
@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h4>@yield('judul')</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('download.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>File</label>
                <input type="file" class="form-control @error('file') is-invalid @enderror" name="file"
                    value="{{ old('file') }}">
                @error('file')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label>Judul</label>
                <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul"
                    value="{{ old('judul') }}">
                @error('judul')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label>No Katalog</label>
                <input type="text" class="form-control @error('no_katalog') is-invalid @enderror" name="no_katalog"
                    value="{{ old('no_katalog') }}">
                @error('no_katalog')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label>No Publikasi</label>
                <input type="text" class="form-control @error('no_publikasi') is-invalid @enderror" name="no_publikasi"
                    value="{{ old('no_publikasi') }}">
                @error('no_publikasi')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label>ISSN / ISBN</label>
                <input type="text" class="form-control @error('issn') is-invalid @enderror" name="issn"
                    value="{{ old('issn') }}">
                @error('issn')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label>Tanggal Publikasi</label>
                <input type="text" name="tgl_publikasi"
                    class="form-control datepicker @error('tgl_publikasi') is-invalid @enderror"
                    value="{{ old('tgl_publikasi') }}">
                @error('tgl_publikasi')
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
@section('js')
<script src="{{ asset('assets/modules/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
@endsection