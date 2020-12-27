@extends('layouts.admin.master')
@section('judul','Edit Visi Dan Misi')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/modules/summernote/summernote-bs4.css') }}">
@endsection
@section('content')
<div class="row-12">
    <div class="card">
        <div class="card-header">
            <h4>Edit Visi Misi</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('visimisi.update', $visimisi->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label>
                        <h5>Visi</h5>
                    </label>
                    <textarea name="visi" class="form-control summernote">{{ $visimisi->visi }}</textarea>
                </div>
                <div class="form-group">
                    <label>
                        <h5>Misi</h5>
                    </label>
                    <textarea name="misi" class="form-control summernote">{{ $visimisi->misi }}</textarea>
                    <small class="text-danger">note: disarankan untuk memasukan gambar menggunakan link url.</small>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 col-md-7">
                        <a href="{{ route('visimisi.index') }}" class="btn btn-danger">Kembali</a>
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