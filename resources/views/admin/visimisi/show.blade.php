@extends('layouts.admin.master')
@section('judul','Visi dan Misi')
@section('content')
<div class="row-12">
    @if (session('sukses'))
    <div class="alert alert-success">
        {{ session('sukses') }}
    </div>
    @endif
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4>@yield('judul')</h4>
            <a href="{{ route('visimisi.edit', $visimisi->id) }}" class="btn btn-primary">
                Edit Sejarah
            </a>
        </div>
        <div class="card-body">
            <p>{!! $visimisi->visi !!}</p>
            <p>{!! $visimisi->misi !!}</p>
        </div>
        <div class="card-footer bg-whitesmoke d-flex justify-content-between">
            <small>Diupdate : {{ $visimisi->updated_at }}</small>
            <a href="{{ route('visimisi.index') }}" class="btn btn-sm btn-danger">
                Kembali
            </a>
        </div>
    </div>
</div>
@endsection