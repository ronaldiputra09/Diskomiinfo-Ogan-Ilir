@extends('layouts.admin.master')
@section('judul','Edit Agenda')
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
            <form action="{{ route('agenda.update', $agenda->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label>Nama Kegiatan</label>
                    <input type="text" name="nama_kegiatan"
                        class="form-control @error('nama_kegiatan') is-invalid @enderror"
                        value="{{ $agenda->nama_kegiatan }}">
                    @error('nama_kegiatan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Tempat</label>
                    <input type="text" name="tempat" class="form-control @error('tempat') is-invalid @enderror"
                        value="{{ $agenda->tempat }}">
                    @error('tempat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Waktu</label>
                    <input type="text" name="waktu" class="form-control datepicker @error('waktu') is-invalid @enderror"
                        value="{{ $agenda->waktu }}">
                    @error('waktu')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Pengirim</label>
                    <input type="text" name="pengirim" class="form-control @error('pengirim') is-invalid @enderror"
                        value="{{ $agenda->pengirim }}">
                    @error('pengirim')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
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
<script src="{{ asset('assets/modules/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
@endsection