@extends('layouts.admin.master')
@section('judul','Struktur Organisasi')
@section('content')
<div class="row-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4>@yield('judul')</h4>
            <a href="{{ route('struktur.create') }}" class="btn btn-sm btn-primary">Tambah Struktur</a>
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
                        <th scope="col">Struktur</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($struktur as $hasil)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $hasil->struktur }}</td>
                        <td>
                            <form action="{{ route('struktur.destroy', $hasil->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Apakah yakin ingin menghapus!')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <small class="text-danger">note: diwajibkan untuk menghapus terlebih dahulu untuk mengeditnya..</small>
        </div>
    </div>
</div>
@endsection