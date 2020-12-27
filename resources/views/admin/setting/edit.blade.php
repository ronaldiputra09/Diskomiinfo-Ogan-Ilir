@extends('layouts.admin.master')
@section('judul','Edit Setting')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-daterangepicker/daterangepicker.css') }}">
@endsection
@section('content')
<div class="row-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4>@yield('judul')</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('setting.update', $setting->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label>Judul Welcome</label>
                    <input type="text" name="judul_welcome"
                        class="form-control @error('judul_welcome') is-invalid @enderror"
                        value="{{ $setting->judul_welcome }}">
                    @error('judul_welcome')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Text Welcome</label>
                    <input type="text" name="isi_welcome"
                        class="form-control @error('isi_welcome') is-invalid @enderror"
                        value="{{ $setting->isi_welcome }}">
                    @error('isi_welcome')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 col-md-7">
                        <a href="{{ route('setting.index') }}" class="btn btn-danger">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="{{ asset('assets/modules/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
@endsection