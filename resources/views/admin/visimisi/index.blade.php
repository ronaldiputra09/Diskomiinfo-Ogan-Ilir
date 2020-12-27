@extends('layouts.admin.master')
@section('judul','Visi Dan Misi')
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
                        <th scope="col">Visi</th>
                        <th scope="col">Misi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($visimisi as $hasil)
                    <tr>
                        <th scope="row">1</th>
                        <td>{!! Str::limit($hasil->visi, 1000, '...') !!}</td>
                        <td>{!! Str::limit($hasil->misi, 1000, '...') !!}</td>
                        <td>
                            <a href="{{ route('visimisi.show', $hasil->id) }}" class="btn btn-sm btn-warning">
                                Preview
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection