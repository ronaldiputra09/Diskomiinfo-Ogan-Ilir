@extends('layouts.admin.master')
@section('judul','Sejarah')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/modules/summernote/summernote-bs4.css') }}">
@endsection
@section('content')
<div class="row-12">
    <div class="card">
        <div class="card-header">
            <h4>@yield('judul')</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('sejarah.update', $sejarah->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror"
                        value="{{ $sejarah->judul }}">
                    @error('judul')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Konten</label>
                    <textarea name="konten" class="form-control summernote">{{ $sejarah->konten }}</textarea>
                    <small class="text-danger">note: disarankan untuk memasukan gambar menggunakan link url.</small>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 col-md-7">
                        <a href="{{ route('sejarah.index') }}" class="btn btn-danger">Kembali</a>
                        <button class="btn btn-primary">Publish</button>
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