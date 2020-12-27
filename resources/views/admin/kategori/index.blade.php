@extends('layouts.admin.master')
@section('judul','Kategori')
@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h4>@yield('judul')</h4>
        <a href="{{ route('kategori.create') }}" class="btn btn-sm btn-primary">Tambah Kategori</a>
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
                    <th scope="col">Nama</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kategori as $k => $hasil)
                <tr>
                    <th scope="row">{{ $k + $kategori->firstitem() }}</th>
                    <td>{{ $hasil->nama }}</td>
                    <td>{{ $hasil->slug }}</td>
                    <td>
                        <form action="{{ route('kategori.destroy', $hasil->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('kategori.edit', $hasil->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('Apakah yakin ingin menghapus!')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $kategori->links() }}
    </div>
</div>

@endsection