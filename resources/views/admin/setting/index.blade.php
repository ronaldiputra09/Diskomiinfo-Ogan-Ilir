@extends('layouts.admin.master')
@section('judul','Setting')
@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h4>@yield('judul')</h4>
        <a href="{{ route('setting.edit', $setting->id) }}" class="btn btn-sm btn-primary">Edit Setting</a>
    </div>
    <div class="card-body">
        @if (session('sukses'))
        <div class="alert alert-success">
            {{ session('sukses') }}
        </div>
        @endif
        <div class="form-group">
            <label>Judul Welcome</label>
            <input disabled type="text" class="form-control" value="{{ $setting->judul_welcome }}">
        </div>
        <div class="form-group">
            <label>Isi Welcome</label>
            <input disabled type="text" class="form-control" value="{{ $setting->isi_welcome }}">
        </div>
        <div class="form-group">
            <label>Terakhir Diupdate</label>
            <input disabled type="text" class="form-control" value="{{ $setting->updated_at }}">
        </div>
    </div>
</div>

@endsection