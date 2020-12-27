@extends('layouts.admin.master')
@section('judul','Edit Post')
@section('content')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/modules/summernote/summernote-bs4.css') }}">
@endsection

<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h4>@yield('judul')</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label>Judul Post</label>
                <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul"
                    value="{{ $post->judul }}">
                @error('judul')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <select name="kategori_id" class="form-control selectric @error('kategori_id') is-invalid @enderror">
                    <option value="" holder>Pilih Kategori</option>
                    @foreach ($kategori as $k)
                    <option value="{{ $k->id }}" @if ($post->kategori_id == $k->id)
                        selected
                        @endif>{{ $k->nama }}</option>
                    @endforeach
                </select>
                @error('kategori_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label>Konten</label>
                <textarea name="konten" class="form-control summernote-simple">{{ $post->konten }}</textarea>
                <small class="text-danger">note: disarankan untuk memasukan gambar menggunakan link url.</small>
            </div>
            <div class="form-group">
                <label>Thumbnail</label>
                <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar"
                    value="{{ old('gambar') }}">
                @error('gambar')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <a href="{{ route('post.index') }}" class="btn btn-danger">Kembali</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>

@endsection

@section('js')
<script src="{{ asset('assets/modules/summernote/summernote-bs4.js') }}"></script>
@endsection