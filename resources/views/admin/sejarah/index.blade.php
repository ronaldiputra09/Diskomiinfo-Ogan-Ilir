@extends('layouts.admin.master')
@section('judul','Sejarah')
@section('content')
<div class="row-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4>@yield('judul')</h4>
        </div>
        <div class="card-body">
            @if (session('sukses'))
            <div class="alert alert-success">
                {{ session('sukses') }}
            </div>
            @endif
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Konten</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $sejarah->judul }}</td>
                        <td>{!! Str::limit($sejarah->konten, 1000, '...') !!}</td>
                        <td>
                            <a href="{{ route('sejarah.show', $sejarah->id) }}" class="btn btn-sm btn-warning">
                                Preview
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection